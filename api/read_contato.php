<?php

require_once dirname(__DIR__) . "/lib/database.php";

$conn = get_conn();
$stmt = $conn->query("SELECT * FROM contato");
$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($contatos);