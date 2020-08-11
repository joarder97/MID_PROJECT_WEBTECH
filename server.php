<?php


    if(isset($_POST["registerButton"])) {
        session_start();

    	$id="";
    	$name = "";
    	$email = "";

    	$errors = array();

    	//connection
    	$db = mysqli_connect('localhost', 'root' , '' , 'adminsystem');


		

        $id = $_POST["id"];
        $password = $_POST["pass"];
        $confirmPassword = $_POST["confirmPass"];
        $name = $_POST["uname"];
        $email = $_POST["email"];

        //validation
        if(empty($id)) { array_push($errors, "Username is required. <br>");  }
       	if(empty($password)) { array_push($errors, "Password is required. <br>"); }
        if(empty($name)) { array_push($errors, "Name is required. <br>"); }	        	        	        
        if(empty($email)) { array_push($errors, "Email is required. <br>"); }
        if($password != $confirmPassword){ array_push($errors, "Password do not match <br>"); }

        //checking if same userid or email exist in database
      
            $user_check_query = "SELECT * FROM admin WHERE uidAdmin= '$id' or emailAdmin = '$email' LIMIT 1";

            $result = mysqli_query($db, $user_check_query);


            $user = mysqli_fetch_assoc($result);
            if($user){
                if($user['uidAdmin'] === $id ){ array_push($errors, "Username already exists <br>"); }
                if($user['emailAdmin'] === $email ){ array_push($errors, "Email already exists <br>"); }
            }

            
             if(count($errors)>0);{
             foreach($errors as $error) {
                echo $error;
                }

         }
            


    	//Resister the user of no error

    	if(count($errors) == 0){
    		$pwd = md5($password);
    		$query = "INSERT INTO admin(uidAdmin,pwdAdmin,nameAdmin,emailAdmin) VALUES ('".$id."','".$pwd."', '".$name."', '".$email."')";
		    $result = $db->query($query);

            if($result)
            echo "Registration Done. Please Log in to Proceed.";
        else
            echo "SQL ERROR";

			
			
    	}

   	
}


//login for users

if(isset($_POST["loginButton"])){

        $db = mysqli_connect('127.0.0.1', 'root' , '' , 'adminsystem');
        $id = $_POST["id"];
        $password = $_POST["password"];

        $pwd = md5($password);
        $user_check_query = "SELECT * FROM admin WHERE uidAdmin= '".$id."' or pwdAdmin = '".$pwd."' LIMIT 1";
         $result1 = $db->query($user_check_query);


        if(mysqli_num_rows($result1) == 1){
            session_start(); 
             $_SESSION['id'] = $id; 

            if(isset($_POST['remember'])) {
                    $_SESSION['status'] = "ok";
                 $_SESSION['status'] = "ok";
                setcookie ('id', $id,time()+ 3600);
                header('location: home.php');
            }else{
           
             $_SESSION['status'] = "ok";
            header('location: home.php');
}
        }
        else
        {
            echo "Use valid username and password to login. <br> to register go to register page";
        }
        
    }


    
?>