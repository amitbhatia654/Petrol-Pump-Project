<a href="resultsbydate.php">Back</a>
<?php
extract($_POST);
include "dbconnect.php";






$select="SELECT * FROM   
`addingpetrol` WHERE date BETWEEN '$fdate' and '$tdate' ";


?>
<table border="1px " cellpadding="10px ">
    <tr>
        <th>Fuel Quantity</th>
        <th>date</th>
    </tr>

    

<?php
$sel_query=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($sel_query)){
    ?>
<tr>
    <td><?php echo $row['petrolsize']?></td>
    <td><?php echo $row['date']?></td>
</tr><br>



    <?php
    
}




?>

</table>


