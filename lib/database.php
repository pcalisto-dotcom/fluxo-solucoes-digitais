<?php

function get_conn() {
    $host = 'mysql';
    $username = 'simplifica_fluxo_admin';
    $password =  'M4r!pos4s';
    $db = 'simplifica_fluxo';
    $port =  3306;

    $url = "mysql:host=$host:$port;dbname=$db";
    $pdo = new PDO($url, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("SET NAMES 'utf8mb4'");
    $pdo->exec("SET CHARACTER SET utf8mb4");
    
    return $pdo;
}