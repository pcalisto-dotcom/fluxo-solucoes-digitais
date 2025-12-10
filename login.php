<?php

require_once __DIR__ . '/lib/database.php';
require_once __DIR__ . '/lib/auth.php';

$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        login($email, $senha);
        header('Location: /');
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

include __DIR__ . '/includes/head.php'; ?>

<style>
body {
    width: 100vw;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.login-container {
    background: white;
    border-radius: 12px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    padding: 40px;
    width: 100%;
    max-width: 400px;
    transition: transform 0.3s ease;
}

.login-container:hover {
    transform: translateY(-5px);
}

.login-title {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    font-size: 24px;
    font-weight: 600;
}

form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

fieldset {
    border: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

label {
    font-weight: 500;
    color: #555;
    font-size: 14px;
}

input {
    padding: 12px 16px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.3s ease;
}

input:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

button {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    padding: 14px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
}

.error-message {
    background: #fee;
    border: 1px solid #fcc;
    color: #c33;
    padding: 12px;
    border-radius: 8px;
    text-align: center;
    font-size: 14px;
    animation: shake 0.5s ease-in-out;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
}

.form-footer {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #666;
}

.form-footer a {
    color: #667eea;
    text-decoration: none;
    font-weight: 500;
}

.form-footer a:hover {
    text-decoration: underline;
}
</style>

<div class="login-container">
    <h1 class="login-title">Faça seu Login</h1>
    
    <form action="/login.php" method="post">
        <fieldset>
            <label for="inp-email">Email:</label>
            <input type="email" id="inp-email" name="email" placeholder="seu@email.com" required />
        </fieldset>

        <fieldset>
            <label for="inp-senha">Senha:</label>
            <input type="password" id="inp-senha" name="senha" placeholder="Sua senha" required />
        </fieldset>

        <?php if ($error): ?>
            <div class="error-message">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif ?>

        <button type="submit">Entrar</button>
    </form>
    
    <div class="form-footer">
        <p>Não tem uma conta? <a href="/register.php">Cadastre-se</a></p>
    </div>
</div>

<?php include __DIR__ . '/includes/foot.php'; ?>