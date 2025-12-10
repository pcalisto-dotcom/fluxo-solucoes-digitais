<?php

require_once dirname(__DIR__) . '/lib/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $descricao = $_POST['descricao'];

    try {
        $conn = get_conn();

        $sql = "INSERT INTO contato (nome, email, telefone, assunto, descricao) 
                VALUES (:nome, :email, :telefone, :assunto, :descricao)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
        $stmt->bindParam(':assunto', $assunto, PDO::PARAM_STR);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location: /?success=1');
            exit();
        } else {
            header('Location: /?error=insert_failed');
            exit();
        }

    } catch (PDOException $e) {
        error_log("Erro ao inserir contato: " . $e->getMessage());
        header('Location: /?error=database_error');
        exit();
    }
} else {
    header('Location: /');
    exit();
}