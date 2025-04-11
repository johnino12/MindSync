<?php
session_start();

if(isset($_SESSION['uid'])){
    require "dbconnection.php";

$post_content = htmlspecialchars($_POST['create_post_content']);


$con=create_connection();

if($con->connect_error){
    die("Connection Failed".$con->connect_error);
}
  $sql_post="INSERT INTO post VALUES(0,'$post_content',NOW(),NOW(),".$_SESSION['uid'].")";

    $con->query($sql_post);
   
header("location:../index.php?postsuccess=1");

}