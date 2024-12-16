<?php
include "dbconnect.php";
extract($_POST);

if($fueltype=="petrol"){

    
$insert="INSERT INTO `addingpetrol`(`petrolsize`, `withdrawn`, `date`, `perform`) VALUES ('$quantity','0','$date','add')";
mysqli_query($conn,$insert) or die("data not update");
header("location:addfueltostore.php");
    
    
}
elseif($fueltype=="diesel"){
    
$insert="INSERT INTO `addingdiesel`(`dieselsize`, `date`,`perform`)  VALUES ('$quantity', '$date' , 'add' )";
mysqli_query($conn,$insert) or die("data not update");
header("location:addfueltostore.php");

}
elseif($fueltype=="cng"){
    
$insert="INSERT INTO `addingcng`(`cncsize`, `date`, `perform`) VALUES ('$quantity','$date' ,'add')";
mysqli_query($conn,$insert) or die("data not update");
header("location:addfueltostore.php");

}

elseif($fueltype=="other"){
    
$insert="INSERT INTO `addingother`(`othersize`, `date`, `perform` ) VALUES ('$quantity', '$date' ,'add')";
mysqli_query($conn,$insert) or die("data not update");
header("location:addfueltostore.php");

}








?>