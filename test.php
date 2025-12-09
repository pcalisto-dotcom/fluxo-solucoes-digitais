<?php

include __DIR__ . "/lib/database.php";

$conn = get_conn();

$data = $conn->query("SELECT 1 + 1");
var_dump($data);