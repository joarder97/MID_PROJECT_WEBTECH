<?php require_once 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>Id</td>
                </tr>
                <tr>
                    <td><input type="text" name="id" value="" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="password" value="" required></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login" name="loginButton">
                        <a href="reg.php">Register</a>
                    </td>
                </tr>


            </table>
        </fieldset>
    </form>
</body>
</html>