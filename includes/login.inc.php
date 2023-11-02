<?php

if(isset($_POST['submit']))
{
    // Grabing data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Instantiate LoginController class
    include "autoloader.php";
    $signup = new LoginController($username, $password);


    // Running error handlers and user signup
    $signup->loginUser();
    // Goign back to front page
    header('Location: ../index.php?error=none');
}
    