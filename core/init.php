<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname' => 'phpooplogin'
    )
);

spl_autoload_register(function($class){
    require_once '../classes/' . $class . '.php';
});


