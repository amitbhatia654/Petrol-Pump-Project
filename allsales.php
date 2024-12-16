<a href="store.php">Back</a>
<?php

include "dbconnect.php";


$select="SELECT * FROM `allsales`";
$select_query=mysqli_query($conn , $select);
?>
<table border="1px" cellpadding="10px">
    <tr>
        <th>S No.</th>
        <th>salesman</th>
        <th>customer</th>
        <th>fueltype</th>
        <th>Quantity</th>
        <th>price</th>
        <th>Total Amount</th>
        <th>date</th>

    </tr>

<?php
$n=1;
while($row=mysqli_fetch_array($select_query)){
    ?>
    <tr>
        <td><?php echo $n ?></td>
        <td><?php echo $row['sname'] ?></td>
        <td><?php echo $row['cname'] ?></td>
        <td><?php echo $row['fueltype'] ?></td>
        <td><?php echo $row['quantity'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['totalamount'] ?></td>
        <td><?php echo $row['date'] ?></td>
    </tr>
    
    <?php
 $n++;   
}

?>
</table>