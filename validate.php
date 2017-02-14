<?php
//$input = 'john@example.com';
$input = 'john許@example.com';
$isEmail = filter_var($input, FILTER_VALIDATE_EMAIL);
if ($isEmail !== false) {
    echo $isEmail;
} else {
    echo "Fail";
}