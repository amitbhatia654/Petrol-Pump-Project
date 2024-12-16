<a href="checkfueltype.php">change Fuel Type</a><br>
<?php
extract($_POST);
include "dbconnect.php";
include "csslink.php";


$id;


if($fueltype=="petrol"){
    $id=1;
    
}
elseif($fueltype=="diesel"){
    $id=3;

}
elseif($fueltype=="cng"){
    $id=4;

}





$select="SELECT * FROM `addfuel` where fid=$id ";
$result=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($result)){
    $available= $row['quantity'];

    
}




?>

<h1 class="fuel-data"><?php echo $fueltype;?> Left In Store : <?php echo $available ;?> Litres</h1>

