<?php
include 'views/header.php';
    
echo "Username :".$_SESSION['uname']."</br>";
echo "Firstname :".$_SESSION['fname']."</br>";
echo "Lastname :".$_SESSION['lname']."</br>";
echo "Email :".$_SESSION['email']."</br>";

include 'views/footer.php';
?>
