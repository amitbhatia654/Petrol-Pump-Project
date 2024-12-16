<a href="staffloginpage.php">Go to Login page</a>
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
    <h1>Please Enter Your Details</h1>
    <div class="staffloginpage">
        <form action="staffregisterdetail.php" method="POST">
            <table>
                <tr>
                    <td>
                    name
                </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>contact</td>
                <td><input type="text"></td>
            </tr>
           
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <input type="password" name="password"></td>
                </tr>
                <tr>
                    <td> <input type="submit"></td>
                </tr>
            </table>

        </form>
        
    </div>
</body>
</html>

<?php


?>