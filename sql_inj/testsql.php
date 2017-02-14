<?php
$db_host = "localhost";
$db_name = "test";
$db_login = "test-user";
$db_password = 'test-password';

$db_conn = mysql_connect($db_host, $db_login, $db_password)
           or die ('Not connected : ' . mysql_error());;
mysql_select_db('test', $db_conn) or die ('Can\'t use test: ' . mysql_error());
 
$account = $_REQUEST['account'];

$pass = $_REQUEST['password'];

 //密碼使用md5加密

$password = md5($pass);

 //查詢有無符合帳號資料

$sql = "SELECT * FROM `account` WHERE `account` LIKE '".$account."' AND `password` LIKE '".$password."'";

$res = mysql_query($sql);

$result = mysql_fetch_array($res);

if(empty($result)){

   //若無符合顯示查無帳號

   echo "查無此帳號<br>";

   echo $sql;

   echo "<br>輸入帳號".$account;

   echo "<br>輸入密碼".$pass;
}else{
   //若符合顯示帳號、密碼資訊

   echo "帳號：".$account;

   echo "<br>密碼：".$pass;

   echo "<br>".$sql;
}