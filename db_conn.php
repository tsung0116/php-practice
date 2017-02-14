<?php
require '..\..\includes\settings.php';

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=books;port=3306;charset=utf8',
        'modern_php',
        'Abcd1234'
    );
} catch (PDOException $e) {
// Database connection failed
    echo "Database connection failed";
    exit;
}

//DSN key=value 的順序可以任意調換、host預設是localhost、port預設為3306，charset 預設為 utf8
try {
    $pdo1 = new PDO(
        'mysql:dbname=books',
        'modern_php',
        'Abcd1234'
    );
} catch (PDOException $e) {
    // Database connection failed
    echo "Database connection1 failed";
    exit;
}

try {
    $pdo2 = new PDO(
        //因為使用了 associative array，所以要用sprintf() 
		sprintf(
            'mysql:host=%s;dbname=%s;port=%s;charset=%s',
            $db_settings['host'],
            $db_settings['name'],
            $db_settings['port'],
            $db_settings['charset']
        ),
        $db_settings['username'],
        $db_settings['password']
    );
} catch (PDOException $e) {
    // Database connection failed
    echo "Database connection2 failed";
    exit;
}
