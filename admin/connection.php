<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "blog_project";


$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_error){
    die("Failed" .  $conn->connect_error);
}


?>