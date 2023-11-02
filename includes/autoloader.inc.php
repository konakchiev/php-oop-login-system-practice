<?php
spl_autoload_register('autoLoader');

function autoLoader($className) {
    $ext = '.class.php';
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }
    $fullPath = $path . $className . $ext;

    require_once $fullPath;

}