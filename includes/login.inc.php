<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '0');
if(isset($_POST['submit']))
{
    // Grabing data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Instantiate LoginController class
    include "autoloader.inc.php";
    $signup = new LoginController($username, $password);


    // Running error handlers and user signup
    $signup->loginUser();
    // Goign back to front page
    header('Location: ../index.php?error=none');

}
    