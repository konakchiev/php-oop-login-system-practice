<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */
session_start();
require_once 'core/init.php';
if(!isset($_SESSION['id']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Login System | Profile</title>
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
                        <h3>Hello, <?php echo $_SESSION['username']; ?></h3>
                        <p>This project is for practice purpose only.</p>
                        <a class="btn btn-primary" href="includes/logout.inc.php">Logout</a>
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