<?php

include "dbconnect.php";
extract($_POST);
//echo $fueltype;
//echo $quantity;
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





$select="SELECT * FROM `addfuel` WHERE fid=$id";
$sel_quer=mysqli_query($conn,$select);
while($row=mysqli_fetch_array($sel_quer)){
    $Available=$row['quantity'];
}



$total=$Available+$quantity;


$update="UPDATE `addfuel` SET `quantity`='$total' WHERE fid =$id ";
$update_query=mysqli_query($conn,$update) or die("not update");
header("location:addfueltostore.php");
?>
<script>
    alert("Fuel Added");
</script>
<?php
?>;

