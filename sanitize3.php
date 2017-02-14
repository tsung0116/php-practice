<?php
$email = 'john許@example.com';
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email."<br>";

$string = "\nIñtërnâtiônàlizætiøn\t";
$string = filter_var(
    $string,
    FILTER_SANITIZE_STRING,
    FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
echo $string."<br>";