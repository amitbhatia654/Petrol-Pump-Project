<a href="store.php">Store</a>
<?php
include "dbconnect.php";

$select="SELECT SUM(petrolsize) FROM `addingpetrol` ";
$sel_query=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }

$select="SELECT * FROM `addingpetrol`";
$sel_query=mysqli_query($conn,$select);
?>
<h1>TOTAL Petrol AVAILABLE IN STORE :<?php  echo $available?></h1>
<h3>All Transactions Details</h3>
<table border="1px" cellpadding="10px">
    
    <tr>
        <th>S. NO.</th>
        <th>Quantity</th>
        <th>Date</th>
    </tr>
<?php
$n=1;
while($row=mysqli_fetch_array($sel_query)){
    ?>

    
    <tr>
        <td><?php  echo $n?></td>
        <td><?php  echo $row['petrolsize']?></td>
        <td><?php  echo $row['date']?></td>
    </tr>
    
    



    
    <?php
    $n++;
}



?>
</table>

<hr>





<?php
include "dbconnect.php";

$select="SELECT SUM(dieselsize) FROM `addingdiesel` ";
$sel_query=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }

$select="SELECT * FROM `addingdiesel`";
$sel_query=mysqli_query($conn,$select);
?>
<h1>TOTAL diesel AVAILABLE IN STORE :<?php  echo $available?></h1>
<h3>All Transactions Details</h3>
<table border="1px" cellpadding="10px">
    
    <tr>
        <th>S. NO.</th>
        <th>Quantity</th>
        <th>Date</th>
    </tr>
<?php
$n=1;
while($row=mysqli_fetch_array($sel_query)){
    ?>

    
    <tr>
        <td><?php  echo $n?></td>
        <td><?php  echo $row['dieselsize']?></td>
        <td><?php  echo $row['date']?></td>
    </tr>
    
    



    
    <?php
    $n++;
}



?>
</table>









<hr>





<?php
include "dbconnect.php";

$select="SELECT SUM(cncsize) FROM `addingcng` ";
$sel_query=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }

$select="SELECT * FROM `addingcng`";
$sel_query=mysqli_query($conn,$select);
?>
<h1>TOTAL CNG AVAILABLE IN STORE :<?php  echo $available?></h1>
<h3>All Transactions Details</h3>
<table border="1px" cellpadding="10px">
    
    <tr>
        <th>S. NO.</th>
        <th>Quantity</th>
        <th>Date</th>
    </tr>
<?php
$n=1;
while($row=mysqli_fetch_array($sel_query)){
    ?>

    
    <tr>
        <td><?php  echo $n?></td>
        <td><?php  echo $row['cncsize']?></td>
        <td><?php  echo $row['date']?></td>
    </tr>
    
    



    
    <?php
    $n++;
}



?>
</table>
<hr>







<?php
include "dbconnect.php";

$select="SELECT SUM(othersize) FROM `addingother` ";
$sel_query=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($sel_query)){
     $available=$row[0];


   }

$select="SELECT * FROM `addingother`";
$sel_query=mysqli_query($conn,$select);
?>
<h1>TOTAL Other Fuel AVAILABLE IN STORE :<?php  echo $available?></h1>
<h3>All Transactions Details</h3>
<table border="1px" cellpadding="10px">
    
    <tr>
        <th>S. NO.</th>
        <th>Quantity</th>
        <th>Date</th>
    </tr>
<?php
$n=1;
while($row=mysqli_fetch_array($sel_query)){
    ?>

    
    <tr>
        <td><?php  echo $n?></td>
        <td><?php  echo $row['othersize']?></td>
        <td><?php  echo $row['date']?></td>
    </tr>
    
    



    
    <?php
    $n++;
}



?>
</table>