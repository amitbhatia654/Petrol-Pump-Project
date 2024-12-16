<a href="index.php" class="pagelinks">Main page</a><br>
<a href="petrolpoint.php" class="pagelinks">Back </a>
<?php
extract($_POST);
include "dbconnect.php";
include "csslink.php";
$amount=$price*$customer;

$saleinsert="INSERT INTO `allsales`(`fueltype`, `cname`, `sname`, `quantity`, `price`,`totalamount`, `date`) VALUES ('$fueltype','$cname','$sname','$customer','$price','$amount', '$date')";
mysqli_query($conn,$saleinsert) or die("not insert into sell fuel");


if($fueltype=="petrol"){

    $select="SELECT SUM(petrolsize) FROM `addingpetrol` ";
$sel_query=mysqli_query($conn,$select);

$customer;

$amount=$price*$customer;
while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }


   


$available=$available-$customer;
$insert="INSERT INTO `addingpetrol`(`petrolsize`, `withdrawn`, `date`, `perform`) VALUES ('-$customer','0','$date','sell')";
mysqli_query($conn,$insert);

}

elseif($fueltype=="diesel"){
    

    $select="SELECT SUM(dieselsize) FROM `addingdiesel` ";
    $sel_query=mysqli_query($conn,$select);
    
    $customer;
    
    $amount=$price*$customer;
    while($row=mysqli_fetch_array($sel_query)){
         $available=$row[0];
    
    
       }
    
    
    
    $available=$available-$customer;
    $insert="INSERT INTO `addingdiesel`(`dieselsize`, `date`,`perform`)  VALUES ('-$customer', '$date' ,'sell')";
    mysqli_query($conn,$insert);


}

elseif($fueltype=="cng"){
    
    $select="SELECT SUM(cncsize) FROM `addingcng` ";
    $sel_query=mysqli_query($conn,$select);
    
    $customer;
    
    $amount=$price*$customer;
    while($row=mysqli_fetch_array($sel_query)){
         $available=$row[0];
    
    
       }
    
    
    
    $available=$available-$customer;
    $insert="INSERT INTO `addingcng`(`cncsize`, `date` ,`perform`) VALUES ('-$customer','$date' ,'sell')";
    mysqli_query($conn,$insert);

}

elseif($fueltype=="other"){
    

    $select="SELECT SUM(cncsize) FROM `addingcng` ";
$sel_query=mysqli_query($conn,$select);

$customer;

$amount=$price*$customer;
while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }



$available=$available-$customer;
$insert="INSERT INTO `addingother`(`othersize`, `date`,`perform`) VALUES ('-$customer', '$date' ,'sell')";
mysqli_query($conn,$insert);
}











?>

<h1>Total <?php echo $fueltype ;?> Left : <?php echo $available ;?></h1>

<div class="slip">
    <h2> Hindustan Petroleum</h2>
    <table  cellpadding="5px">
        <tr>
            <td>Customer Name</td>
            <td><?php echo $cname;?></td>
        </tr>

        <tr>
            <td>Salesman Name</td>
            <td><?php echo $sname;?></td>
        </tr>

        <tr>
            <td>Date</td>
            <td><?php echo $date;?></td>
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
            <td><?php echo $price;?></td>
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