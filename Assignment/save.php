<?php

$name = $_POST["name"];
$comment = $_POST["comment"];

 $con= mysqli_connect("localhost","root","");
 mysqli_select_db($con,"guest_book");
 $sql = "INSERT INTO comment(name,comment) VALUES('$name','$comment') ";
 $ret=mysqli_query($con,$sql);

	
     					if($ret){
     					echo '<script language="javascript">';
					echo 'alert("Comment Sucseeded")';
					echo '</script>';
     					header("location:index.php");

    			 }
		
			else
			{
				header("location:index.php");
			}
?>
