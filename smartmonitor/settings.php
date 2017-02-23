<?php
$file = realpath(dirname(__FILE__)."/../..");
// echo realpath(dirname(__FILE__)) . "<br>";
// echo $file;
for($i = 0; $i < strlen($file); $i++) {
  if($file[$i]=="/" || $file[$i]=="\\")
    $file[$i]='*';
}
//echo $file;
$filename = explode("*", $file);
//print_r($filename);
define("mainPath",implode(DIRECTORY_SEPARATOR,$filename));
define("dbPath",mainPath.DIRECTORY_SEPARATOR."db");
//define("UploadPath", mainPath.DIRECTORY_SEPARATOR."firmware");
define("BackupPath", mainPath.DIRECTORY_SEPARATOR."backup");//initial backup path
//define("ScriptPath", mainPath.DIRECTORY_SEPARATOR."script");//initial script path
//define("AutoScriptPath",mainPath.DIRECTORY_SEPARATOR."autoscript");
define("wwwPath", realpath(dirname(__FILE__)."/../"));
define( "ProvisionPath", mainPath.DIRECTORY_SEPARATOR."provision" );

define("osfile", dbPath.DIRECTORY_SEPARATOR."os.txt");
define("dbToUse", dbPath.DIRECTORY_SEPARATOR."monitor.db");
define("dbBackup", mainPath.DIRECTORY_SEPARATOR."db_bak".DIRECTORY_SEPARATOR."monitor.db");
define("dbRestore", mainPath.DIRECTORY_SEPARATOR."db_bak".DIRECTORY_SEPARATOR."monitor_restore.db");
define("dbDoor", "sqlite:".dbToUse);

define("dbVersion", dbPath.DIRECTORY_SEPARATOR."version.db");
