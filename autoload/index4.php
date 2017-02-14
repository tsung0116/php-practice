<?php
//index.php
include_once __DIR__ . "/autoload_n.php";

$myClass = new \MyNamespace\MyClass();
$myClass->doSomething();

$member = new \MyNamespace\Member\Member();
$member->getMemberList();

$mailler = new \MyNamespace\Email\Mailler();
$mailler->sendMail();