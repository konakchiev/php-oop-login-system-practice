<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '0');
if(isset($_POST['submit']))
{
    // Grabing data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordrep'];

    // Instantiate SignupController class
    include "autoloader.inc.php";
    $signup = new SignupController($name, $username, $email, $password, $passwordRepeat);


    // Running error handlers and user signup
    $signup->signupUser();
    // Goign back to front page
    header('Location: ../index.php?error=none');
}
    