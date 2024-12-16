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
    <a href="index.php" class="">Homepage</a>
    <div class="staffloginpage">
        <h2>Login Please !!</h2>
        <form action="stafflogindetail.php" method="POST">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td> <input type="submit"></td>
                </tr>
            </table>

        </form>
        <a href="staffregister.php">Register First</a>
    </div>
</body>
</html>