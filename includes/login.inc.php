<?php

require_once '../core/init.php';    
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new LoginController($username, $password);

    $user->loginUser();
}