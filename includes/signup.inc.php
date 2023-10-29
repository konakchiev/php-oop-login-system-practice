<?php

if(isset($_POST['submit']))
{
    // Grabing data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordrep'];

    // Instantiate SignupController class
    include "autoloader.php";
    $signup = new SignupController($name, $username, $email, $password, $passwordRepeat);


    // Running error handlers and user signup

    // Goign back to front page

}
    