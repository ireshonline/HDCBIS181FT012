<?php

$email = $_POST["email"];
$pass = $_POST["pass"];

 $con= mysqli_connect("localhost","root","");
 mysqli_select_db($con,"guest_book");


	


		 $sql= "SELECT * FROM user WHERE email='$email' AND password='$pass' ";
	
     		
		$result = mysqli_query($con,$sql);

		$check = mysqli_fetch_array($result);
		
		if(isset($check))
			{
				session_start();
				
				$_SESSION['email'] = $email;
				
				$_SESSION['pass'] = $pass;
					

				
				header("location:index.php");
				
			
			
	

			}
				 
		else
		{
			header("location:login.php");
			
			
		}
     	

?>
