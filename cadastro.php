<?php

require_once __DIR__ . '/lib/database.php';
require_once __DIR__ . '/lib/auth.php';

$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $senha = $_POST['senha'];
    $bio = $_POST['bio'];

    try {
        $conn = get_conn();

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (nome, email, cargo, senha, bio) 
                VALUES (:nome, :email, :cargo, :senha, :bio)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':cargo', $cargo, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha_hash, PDO::PARAM_STR);
        $stmt->bindParam(':bio', $bio, PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location: /login.php');
            exit();
        } else {
            header('Location: /');
            exit();
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

include __DIR__ . '/includes/head.php'; ?>

<form action="/cadastro.php" method="post">
    <fieldset>
        <label for="inp-nome">Nome:</label>
        <input type="nome" id="inp-nome" name="nome" />
    </fieldset>

    <fieldset>
        <label for="inp-email">Email:</label>
        <input type="email" id="inp-email" name="email" />
    </fieldset>

    <fieldset>
        <label for="inp-senha">Senha:</label>
        <input type="senha" id="inp-senha" name="senha" />
    </fieldset>

    <fieldset>
        <label for="inp-cargo">Cargo:</label>
        <input type="cargo" id="inp-cargo" name="cargo" />
    </fieldset>

    <fieldset>
        <label for="inp-bio">Bio:</label>
        <textarea id="inp-bio" name="bio"></textarea>
    </fieldset>

    <?php if ($error): ?>
        <p><?= $error ?></p> 
    <?php endif ?>

    <button>Cadastrar</button>
</form>

<?php include __DIR__ . '/includes/foot.php'; ?>