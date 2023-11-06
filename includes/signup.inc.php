<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $repeatPassword = $_POST['passwordRepeat'];

    require_once '../core/init.php';

    $signup = new SignupController($username, $password, $email, $name, $repeatPassword);

    $signup->signupUser();

}