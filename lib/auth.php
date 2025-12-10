<?php

session_start();
require_once dirname(__DIR__) . '/lib/database.php';

function login($email, $senha) {
    if (empty($email) || empty($senha)) {
        throw new Exception("Email e Senha são obrigatórios");
    }

    $conn = get_conn();

    $sql = "SELECT * FROM usuario WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $usuario = $stmt->fetch();
    if (!$usuario) {
        throw new Exception("Usuário não encontrado");
    }

    $hash_senha = $usuario['senha'];
    if (!password_verify($senha, $hash_senha)) {
        throw new Exception("Senha Incorreta");
    }

    save_session($usuario);
}

function save_session($usuario) {
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_email'] = $usuario['email'];
    $_SESSION['usuario_admin'] = (bool) $usuario['admin'];
    $_SESSION['logged_in'] = true;
}

function is_admin() {
    if (!is_logged_in()) {
        return false;
    }
    return isset($_SESSION['user_admin']) && $_SESSION['user_admin'] === true;
}

function logout() {
    $_SESSION = [];

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
}

function is_logged_in() {
    return isset($_SESSION['usuario_id']) && !empty($_SESSION['usuario_id']);
}

function get_usuario() {
    if (!is_logged_in()) {
        return null;
    }

    $id = $_SESSION['usuario_id'];

    $conn = get_conn();
    $sql = "SELECT * FROM usuario WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    $usuario = $stmt->fetch();
    return $usuario;
}
