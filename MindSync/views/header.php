<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MindSync</title>
        
        <link href="./res/mystyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="navbar">
            <a href="./index.php">HOME</a>
            <a href="./gallery.php">GALLERY</a>
            <a href="./about.php">ABOUT</a>
            
            <?php
                if(isset($_SESSION['uid'])){
            ?>
                <a href="./profile.php">
            <?php
                echo $_SESSION['fname']." ".$_SESSION['lname'];
            ?>
                </a>
                <a href="./models/logout_user.php">LOGOUT</a>
            <?php
                }
                else{
            ?>
                <a href="./login.php">LOGIN</a>
                <a href="./registration.php">REGISTER</a>
              <?php
            }
          ?>
             
        </div>
