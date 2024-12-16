<a href="index.php" class="pagelinks">Go to main page</a>

<?php include "csslink.php"?>

<h1 class="site-heading">welcome to Hindustan petroleum</h1>
<div class="customer-demand">
    
    <form action="sellingpetrol1.php" method="POST">
    <h2 >Fuel point For Customers</h2>
    <table>

    <tr>
        <td>Select Fuel Type</td>
    </tr>

    <tr>
    <td>Petrol<input type="radio" name="fueltype" value="petrol"> Diesel <input type="radio" name="fueltype" value="diesel"> CNG <input type="radio" value="cng" name="fueltype"> OTHER <input type="radio" value="other" name="fueltype"></td>
    </tr>
        <tr>
            <td>Customer name</td>
        </tr>

        

    <tr>
        
        <td><input type="text" name="cname"></td>
    </tr>

    <tr>
            <td>Salesman Name</td>
        </tr>

        <tr>
            <td><input type="text" name="sname"></td>
        </tr>
        
        <tr>
            <td>Enter The Quantity</td>
        </tr>
        <tr>
           
             <td><input type="text" name="customer" class="inputbox" placeholder="please enter the quantity"></td>
        </tr>

        <tr>
            <td>Todays Price</td>
            
        </tr>

        <tr>
        <td><input type="text" name="price"></td>

        </tr>
        <tr>
            <td> <input type="date" name="date"></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>


</form>
</div>