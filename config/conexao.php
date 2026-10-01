<?php
// 1. Centraliza os dados usados na conexão com o banco
if (!defined('DB_CONFIG')) {
    define('DB_CONFIG', [
        'host'   => 'localhost',
        'dbname' => 'new_agenda',
        'user'   => 'root',
        'pass'   => ''
    ]);
}

// 2. Abre a conexão com o banco usando PDO
try {
    $dsn = sprintf('mysql:host=%s;dbname=%s', DB_CONFIG['host'], DB_CONFIG['dbname']);
    $conect = new PDO($dsn, DB_CONFIG['user'], DB_CONFIG['pass']);
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<strong>ERRO DE PDO = </strong>" . $e->getMessage();
}
            
