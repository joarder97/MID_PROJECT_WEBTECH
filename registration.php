<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration Page</title>
</head>
<body>
	<fieldset>
		<legend>Admin Registration Form</legend>
		<form action="regCheck.php" method="POST">

				<table>
					<tr>
						<td>User ID:</td>
					</tr>
					<tr>
						<td><input type="text" name="id"></td>	
					</tr>

					<tr>
						<td>Password:</td>
					</tr>
					<tr>
						<td><input type="Password" name="pass"></td>	
					</tr>

					<tr>
						<td>Confirm Password:</td>
					</tr>
					<tr>
						<td><input type="Password" name="confirmPass"></td>	
					</tr>

					<tr>
						<td>Name:</td>
					</tr>
					<tr>
						<td><input type="name" name="uname"></td>	
					</tr>					

					<tr>
						<td>Email:</td>
					</tr>
					<tr>
						<td><input type="Email" name="email"></td>	
					</tr>	
					<tr>
	                    <td><hr>
	                    	<input type="submit" value="Register" name="registerButton">
	                        <a href="">Login</a>
	                    </td>
                	</tr>

				</table>
		</form>
	</fieldset>
</body>
</html>