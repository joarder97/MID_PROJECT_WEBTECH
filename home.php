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


	
            
            <p> 
                Welcome  
                
                    <?php echo $_SESSION['id'] ?> 
               
            </p>
            
            

	<button><a href="logout.php">Logout</a></button>
</body>
</html>
<?php
	}else{
	header('location: login.php');
		}
	}else{
		header('location: login.php');
	}
	

?>