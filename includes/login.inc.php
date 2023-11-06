<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '../core/init.php';    
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new LoginController($username, $password);

    $user->loginUser();
}