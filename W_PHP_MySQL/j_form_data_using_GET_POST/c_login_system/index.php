<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system with PHP</title>
</head>
<body>
    <h2>Simple Login System</h2>
    <table>
        <form action="process.php" method="post">
            <tr>
                <td><label for="username">Username :</label></td>
                <td><input type="text" name="username" id="username" placeholder="Enter username..."></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="pass" id="password" placeholder="Enter password..."></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Login" name="submit"></td>
            </tr>
        </form>
    </table>
</body>
</html>