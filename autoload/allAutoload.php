<?php
//allAutoload.php

function allAutoload($className)
{
    $folders = array(
        __DIR__ . "/first/",
        __DIR__ ."/second/",
    );
    
    foreach ($folders as $folder) {
        $fileName = $folder . $className . ".php";
        if (is_readable($fileName)) {
            require $fileName;
        }
    }
}

spl_autoload_register('allAutoload');