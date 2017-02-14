<?php
$str1 = "Hello";
$str2 = "world!";
echo $str1, PHP_EOL;
echo $str2, PHP_EOL;
echo "<br>";

echo "=============================" . "<br>";
echo $str1. '\n';
echo $str2. '\n';
echo "<br>";

echo "=============================" . "<br>";
echo $str1, "\n";
echo $str2, "\n";
echo "<br>";

echo "=============================" . "<br>";
$str1 .= "\n";
$str2 .= "\n";
echo $str1;
echo $str2;