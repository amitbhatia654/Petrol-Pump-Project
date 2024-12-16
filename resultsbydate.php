<a href="store.php">Store</a>
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
    <div class="searchBox">
    <form action="datereport.php" method="POST">
        <table>
        <tr>
    <td>Petrol<input type="radio" name="fueltype" value="petrol"> Diesel <input type="radio" name="fueltype" value="diesel"> CNG <input type="radio" value="cng" name="fueltype"> OTHER <input type="radio" value="other" name="fueltype"></td>
    </tr>
            
            <tr>
                <th>Please Select Dates</th>
            </tr>
            <tr>
                <td>
                    From
                </td>
                <td><input type="date" name="fdate"></td>
            </tr>

            <tr>
                <td>To Date</td>
                <td><input type="date" name="tdate"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit"></td>
            </tr>

            
        </table>
    </form>
    </div>
</body>
</html>