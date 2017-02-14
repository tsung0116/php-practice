<?php
require '..\..\..\includes\settings.php';
try {
    $pdo = new PDO(
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
    echo "Database connection failed";
    exit;
}

$sql = 'SELECT id, email FROM users WHERE email = :email';
$statement = $pdo->prepare($sql);
$email = filter_input(INPUT_POST, 'email');
$statement->bindValue(':email', $email, PDO::PARAM_INT);
// Iterate results one at a time
echo 'One result as a time as associative array'. "<br>";
$statement->execute();
while (($result = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    echo $result['email']. "<br>";
}
// Iterate ALL results at once
echo 'All results at once as associative array'. "<br>";
$statement->execute();
$allResults = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($allResults as $result) {
    echo $result['email']. "<br>";
}
// Fetch one column value at a time
echo 'Fetch one column, one row at a time as associative array'. "<br>";
$statement->execute();
while (($email = $statement->fetchColumn(1)) !== false) {
    echo $email. "<br>";
}
// Iterate results as objects
echo 'One result as a time as object'. "<br>";
$statement->execute();
while (($result = $statement->fetchObject()) !== false) {
    echo $result->email. "<br>";
}
