<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $repeatPassword = $_POST['repeatPassword'];

    require_once '../core/init.php';

    $signup = new SignupController($username, $password, $email, $name, $repeatPassword);

    $signup->signupUser();

}