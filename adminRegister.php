<?php
include "dbconnect.php";

extract($_POST);

$insert="INSERT INTO `adminregister`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
mysqli_query($conn,$insert) or die("connection failed");

header("location:admin.php")
?>