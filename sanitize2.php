<?php
$conn = new mysqli('localhost', 'root', 'Abcd1234');
$string = 'abc";--';
echo $string."<br>";
$string = mysqli_real_escape_string($conn,$string);
echo $string."<br>";