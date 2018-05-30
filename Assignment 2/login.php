<?php

	
		$password = $_POST["txtpw"];
		$email= $_POST["txtemail"];
        $pass = md5($password);
		

		 $con = mysqli_connect("localhost","root","");

		 mysqli_select_db($con,"login");

		 $sql= "SELECT * FROM login WHERE email='$email' AND password='$password' ";
	
     		
		$result = mysqli_query($con,$sql);

		$check = mysqli_fetch_array($result);
		echo $email;
			echo $password;
		if(isset($check))
			{
			setcookie("email", $email, time() + (60), "/");				setcookie("pass", $password , time() + (60), "/");	

			
				header("location:index.php");
							
			
	

			}
				 
		else
		{
			header("location:loginform.php");
			
			
		}
     	

	

?>