<?php    
	session_start();
	include 'server.php';
	if(isset($_SESSION['status'])){
		if($_SESSION['status'] = "ok") 
		{

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>


	<form method="post">
            
            <h2> 
                Welcome  
                
                    <?php echo $_SESSION['id'] ?> 
               
            </h2>

            <p>Enter User Information: (Name - Payment Status)    <input type="text" name="infoNameUser" value="">  <input type="text" name="infoPaymentStatus" value=""> <input type="submit" name="infoSubmit">
             <input type="submit" name="show" value="View Info"></p>

            <?php
            

            if(isset($_POST["infoSubmit"]))
 		 	{
 		 	$name = $_POST["infoNameUser"];
            $status = $_POST["infoPaymentStatus"];
            	if(empty($name) || empty($status))
            	{
            		echo "Empty fields found. Please try again.";
            	}else{
	            $file = fopen("userinfo.txt",'a');
	            $user = $name."   |   ".$status.PHP_EOL;
	            fwrite($file, $user); 
	            echo "User Information Added";       
       	 }
		}

		if(isset($_POST["show"])){
				echo "USERNAME ||| PAYMENT STATUS<br>";
				$fh = fopen("userinfo.txt", 'r');
				$content = fread($fh, 25000);
				echo nl2br($content);
			}

             ?>

            
            <hr> 

	<button><a href="logout.php">Logout</a></button>
	</form>
</body>
</html>
<?php

	}else{
	header('location: login.php');
		}
	}
	
		else{
			header('location: login.php');
	}
	

?>