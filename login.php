<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>Id</td>
                </tr>
                <tr>
                    <td><input type="text" name="id" value="<?php if(isset($_COOKIE['id'])) { echo $_COOKIE['id']; } ?>" required></td>
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
                    <td><input type="checkbox" name="remember" value="1"> Remember me</td>

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
<?php
 require_once 'server.php';
  ?>