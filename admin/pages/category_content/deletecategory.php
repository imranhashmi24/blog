<?php

include "connection.php";


 if (isset($_GET['id'])){
    $id=$_GET['id'];
    $delete= $conn->query("DELETE FROM `category` WHERE `id`='id'");
 }
?>