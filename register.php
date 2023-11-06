<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Login System | Register</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="/">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="/php-oop-login-system-practice">Login</a><a href="/php-oop-login-system-practice/register.php" class="active">Register</a>
                        </div>
                        <div class="alert" id="alert"></div>
                        <div class="alert alert-danger" id="alert-danger"></div>
                        <form method="post" id="registerUser">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Full Name" >
                            <input class="form-control" type="text" name="username" id="username" placeholder="Username" >
                            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                            <input class="form-control" type="password" name="repeatPassword" id="passwordRepeat" placeholder="Repeat Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" name="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/ajax.js"></script>
</body>
</html>