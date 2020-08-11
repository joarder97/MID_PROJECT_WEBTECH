<?php    
	session_start();
	include 'server.php';
	$id = $_SESSION['id'];
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

             <input type="submit" name="myinfo" value="My Info">
             <?php
             	if(isset($_POST['myinfo']))
             	{	
             		$db = mysqli_connect('127.0.0.1', 'root' , '' , 'adminsystem');
             		$user_check_query = "SELECT * FROM admin WHERE uidAdmin= '".$id."'";
             		$result2 = $db->query($user_check_query);
             		if ($result = $db->query($user_check_query)) {

    /* fetch associative array */
			    while ($row = $result2->fetch_assoc()) {
			        $field1name = $row["uidAdmin"];
			        $field2name = $row["nameAdmin"];
			        $field3name = $row["emailAdmin"];

			        echo "<br>";
			        echo "User ID: ";
			        echo $field1name.'<br />';
			        echo "Name: ";
			        echo $field2name.'<br />';
			         echo "Email ID: ";
			        echo $field3name; 
			    }


             	}
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