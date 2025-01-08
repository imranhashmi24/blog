<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "blog";


$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_error){
    die("Failed" .  $conn->connect_error);
}

$result = $conn->query("select * from brand"); 

?>