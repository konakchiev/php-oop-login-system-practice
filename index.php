<?php 
    /**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */
    include('core/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Login System</title>
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
                        <h3>Login.</h3>
                        <p>This project is for practice purpose only.</p>
                        <div class="page-links">
                            <a href="/php-oop-login-system-practice" class="active">Login</a><a href="/php-oop-login-system-practice/register.php">Register</a>
                        </div>
                        <div id="alert" class="alert"></div>
                        <div class="alert alert-danger" id="alert-danger"></div>
                        <form method="post">
                            <input class="form-control" type="text" id="username" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submitLogin" type="submit" name="submit" class="ibtn">Login</button>
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