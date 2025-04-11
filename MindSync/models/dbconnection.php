<?php

function create_connection(){
    $host= "localhost";
    $username= "root";
    $password="";
    $database="mindsync";
    
    return new mysqli($host,$username,$password,$database);
}