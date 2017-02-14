<?php
// 印出 "Australia comprises 6 states and 10 territories"
printf( "Australia comprises %d states and %d territories", 6, 10 );
echo "<br>";

$state = 6;
$territory = 10;

echo "Australia comprises $state states and $territory territories";
echo "<br>";

$db_settings = [
    'host' => 'localhost',
    'port' => '3306',
    'name' => 'books',
    'charset' => 'utf8'
];

$string = sprintf(
            'mysql:host=%s;dbname=%s;port=%s;charset=%s',
            $db_settings['host'],
            $db_settings['name'],
            $db_settings['port'],
            $db_settings['charset']
        );
echo $string;
echo "<br>";

$host = 'localhost';
$name = 'books';
$port = '3306';
$charset = 'utf8';
$string = "mysql:host=$host;dbname=$name;port=$port;charset=$charset";

// The following statement does not work
//$string = "mysql:host=$db_settings[\'host\'];dbname=$db_settings[\'name\'];port=$db_settings[\'port\'];charset=$db_settings[\'charset\']";
echo $string;
echo "<br>";

$string_a = ['t' => 'localhost'];
//$string = "$string_a['t']"; //因為置換順序的關係，不能夠在雙引號中呼叫 associative array內的值
$string = '$string_a[\'t\']';
echo $string;
echo "<br>";