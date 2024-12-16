<?php 
 include "csslink.php";
include 'dbconnect.php';
include "session.php";
?>

<span>Welcome <?php echo $_SESSION['username']?></span><a href="logout.php " class="csslink.php">Logout</a><br>
<a href="admin.php" class="pageLinks">Go To DashBoard Page</a>


<div class="div-dashboard">
    <a href="checkfuel1.php"><button class="mybtn">All Transactions</button>  </a>
    <a href="addfueltostore.php"><button class="mybtn">Add fuel</button>  </a>
    <a href="resultsbydate.php"> <button class="mybtn">Search</button> </a>
    <a href="allsales.php"> <button class="mybtn">All Sales</button> </a>
    
</div>


<?php
$select="SELECT SUM(petrolsize) FROM `addingpetrol` ";
$sel_query=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }


   
?>

<h1>Total Petrol available in Store : <?php echo $available; ?></h1>
<hr>
<?php
$select="SELECT SUM(dieselsize) FROM `addingdiesel` ";
$sel_query=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }

   ?>

<h1>Total Diesel available in Store : <?php echo $available; ?></h1>
<hr>


<?php
$select="SELECT SUM(cncsize) FROM `addingcng` ";
$sel_query=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }
?>

<h1>Total CNG available in Store : <?php echo $available; ?></h1>
<hr>


<?php

$select="SELECT SUM(othersize) FROM `addingother` ";
$sel_query=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }
?>

<h1>Total OTHER Fuel available in Store : <?php echo $available; ?></h1>
<hr>

