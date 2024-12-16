<a href="index.php">Customer Page</a>
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

$select="SELECT * FROM `addfuel` where fid=$id";
$result=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($result)){
    $available= $row['quantity'];
    
}
$leftfuel=$available-$customer;
$amount=100*$customer;

$update="UPDATE `addfuel` SET `quantity`='$leftfuel' WHERE fid =$id ";
$update_query=mysqli_query($conn,$update) or die("not update");






?>

<h1 class="leftfuel"><?php echo $fueltype;?> Left : <?php echo $leftfuel;?></h1><br>

<div class="slip">
    <h2> Hindustan Petroleum</h2>
    <table  cellpadding="5px">
        <tr>
            <td>Date</td>
            <td>25-08-2022</td>
        </tr>
        <tr>
            <td>Day</td>
            <td>Wednesday</td>
            
        </tr>

        <tr>
            <td>Time</td>
            <td>12:50</td>
        </tr>

        <tr>
            <td>Price Per Litre</td>
            <td>100</td>
        </tr>

        <tr>
            <td>
                Type
            </td>
            <td><?php echo $fueltype;?></td>
        </tr>

        <tr>
            <td>Quantity(litres)</td>
            <td><?php echo $customer;?></td>
        </tr>

        <tr>
            <td>Amount</td>
            <td><?php echo $amount;?></td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td><?php echo $amount;?></td>
        </tr>
        <tr>
            <td>Type of Payment</td>
            <td>Cash</td>
        </tr>
    </table>

</div>