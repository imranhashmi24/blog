<?php

$server   = "localhost";
$username = "root";
$password = "";
$database  = "blog_project";

$conn = new mysqli($server,$username,$password,$database);


 if (isset($_GET['id'])){
    $id=$_GET['id'];
    $delete= $conn->query("DELETE FROM `category` WHERE `id`='id'");
 }
?>