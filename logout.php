<?php
	
	$id = $_POST['id'];
		
if(isset($_COOKIE['id'])){
                setcookie ('id', $id,time()- 3600);
                session_start();
				session_destroy();

				header('location: login.php');
            }else{

	session_start();
	session_destroy();
	//session_unset($_SESSION['status']);

	header('location: login.php');
}
?>
