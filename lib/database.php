<?php

function get_conn() {
    $databaseFile = sys_get_temp_dir() . './mydb.sqlite3';
    $pdo = new PDO("sqlite:$databaseFile");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}