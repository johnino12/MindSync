<?php
session_start();

if (isset($_SESSION['uid'])) {
    require "dbconnection.php";

    $comment_text = htmlspecialchars($_POST['comment_text']);
    $post_id = $_POST['post_id'];

    $con = create_connection();

    if ($con->connect_error) {
        die("Connection Failed: " . $con->connect_error);
    }

    $sql_comment = "INSERT INTO comment VALUES (0,$post_id, " . $_SESSION['uid'] . ", '$comment_text', NOW(), NOW())";

    $con->query($sql_comment);
   
header("location:../index.php?commentsuccess=1");

}