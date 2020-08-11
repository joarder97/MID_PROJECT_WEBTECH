<?php    
	session_start();
	include 'server.php';
	if(isset($_SESSION['status'])){
		if($_SESSION['status'] = "ok"){
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>This is the home page</h1>
	

	<div>
		<h3>



		</h3>


	</div>

	<h3>Welcome</h3> 
	<button><a href="logout.php">Logout</a></button>

</body>
</html>
<?php
	}else{
		//session_destroy();
		header('location: login.php');
		}
	}
else{
			//session_destroy(); 
		header('location: login.php');
	}


?>