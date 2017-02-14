<?php
$input = '<p><script>alert("你贏了 You won the Nigerian lottery!");</script></p>';
echo htmlentities($input, ENT_QUOTES, 'UTF-8');