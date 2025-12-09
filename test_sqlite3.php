<?php

try {
    $databaseFile = './mydb.sqlite3';
    $db = new SQLite3($databaseFile);

    $init_sql = file_get_contents('./database/init.sql');
    $queries = explode(';', $init_sql);

    foreach ($queries as $query) {
        if (!trim($query)) continue;
        $db->query($query);
    }
    
    $db->close();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "\n";
    if (isset($db)) {
        $db->close();
    }
}