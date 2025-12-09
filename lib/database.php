<?php

function get_conn() {
    $db = new SQLite3('db.sqlite3');
    return $db;
}