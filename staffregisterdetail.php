<?php
extract($_POST);

include "dbconnect.php";
$insert="INSERT INTO `staffregister`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
mysqli_query($conn,$insert) or die("data not saved");
header("location:staffloginpage.php");

?>