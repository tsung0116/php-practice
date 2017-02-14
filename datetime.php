<?php
$datetime = DateTime::createFromFormat('M j, Y H:i:s', 'Jan 2, 2014 8:04:12');
echo $datetime->format('Y-m-d G:i:s');