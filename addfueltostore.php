<a href="store.php"> Go to Store</a>
<a href="checkfuel1.php"> Check Fuel</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="addfuel">
    <h1>Add Petrol To Store</h1>
        
    <form action="addingfuel3.php" method="POST">

        <table class="addfueltable">

        <tr>
            <td>Select Type : </td>
            <td>Petrol<input type="radio" name="fueltype" value="petrol"> Diesel <input type="radio" name="fueltype" value="diesel"> CNG <input type="radio" value="cng" name="fueltype"> Other <input type="radio" value="other" name="fueltype"> </td>
        </tr>
            
            <tr>
                <td>Quantity</td>
                <td><input  class="inputbox1" type="text" name="quantity"></td>
            </tr>
            <tr>
                <td>Select Date</td>
                <td>
                    <input type="date" name="date">
                </td>
            </tr>
            
            <tr>
                <td><input type="submit" ></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>