<?php

	$name = $_POST["name"];
	$pass1 =  $_POST["pass1"];
	$pass2 = $_POST["pass2"];
	$email = $_POST["email"];
	      
				 $con= mysqli_connect("localhost","root","");
			
				 mysqli_select_db($con,"guest_book");
				
				 $sql= "INSERT INTO users(name,email,password) VALUES ('$name','$email','$pass1')";
	
     				 $ret = mysqli_query($con,$sql);

     	

     				if($ret!="")
				{

     					echo '<script language="javascript">';
					echo 'alert("Registation Sucseeded")';
					echo '</script>';
     					header("location:index.php");

    				}
		
				else
				{
					header("location:register.php");
				}
			
 
	
	

?>
