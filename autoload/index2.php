<?php
//index2.php
include_once __DIR__ . "/firstAutoload.php";
include_once __DIR__ . "/secondAutoload.php";

$first = new First();
$first->doSomething();

$second = new Second();
$second->doSomething();