<?php


extract($_POST);



include "dbconnect.php";

$select="SELECT * FROM `adminregister` WHERE email='$email' and password ='$password'";
$select_query=mysqli_query($conn,$select) or die("data not fetch");
$result=mysqli_fetch_array($select_query);


if(mysqli_num_rows($select_query)>0){
    include "session.php";
    $_SESSION['username']=$result['name'];
   header("location:store.php");
}

else{
    ?>
    <script>alert("Wrong Id or password please try again");</script>
    <?php
    header("location:admin.php");
}


?>