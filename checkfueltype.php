<?php  include "csslink.php" ;?>
<a href="store.php" class="pageLinks">Go To store</a>

<div class="fuel-type">
<form action="checkfuel1.php" method="POST">
    <table>
        <tr>
            <td>Please Select the Fuel Type</td>
            <tr><td>Petrol<input type="radio" name="fueltype" value="petrol"> Diesel <input type="radio" name="fueltype" value="diesel"> CNG <input type="radio" value="cng" name="fueltype"></td></tr>
        </tr>
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
</form>

</div>