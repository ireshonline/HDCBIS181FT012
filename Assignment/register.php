<?php



?>
<HTML>
<header><title>Comment</title></header>
<Body>
<form name="guestbook" method="post" action="reg.php" onSubmit="return validateForm()">
	
	
 	                  Name : <input type="text" name="name" id="txtname"> <br>
			  Email : <input type="text" name="email" id="txtemail"><br>
			  Password : <input type="password" name="pass1" id="txtpw"><br>
			  Password Agian : <input type="password" name="pass2" id="txtpw1"><br>
			<pre>                       <input type="submit" name="btnlogin" value = "Register"/>
	                       <a href="login.php">Login</a></pre>
</pre>   
</form>


<script type="text/javascript">
		function validateForm()
		{
			var name= document.getElementById("txtname").value;
			
			var email= document.getElementById("txtemail").value;
			
			var passwd= document.getElementById("txtpw").value;
			
			var passwd1= document.getElementById("txtpw1").value;
			
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
			
			if(name !="")
			{
					if (email.match(mailformat)) 
					{
							if(passwd.length>8)
							{
								if(passwd != passwd1)
								{
									window.alert("Password Doesn't Match");
									return false;
								}

							}
							else
							{
								window.alert("Password Must Be more than 8 charecters");
								return false;
							}
						
						

					}
					else
					{
						window.alert("Enter Vaild Email");
						return false;
					}
				
			}
			else
			{
				window.alert("Enter Name Please");
				return false;
			}
	
	}
		
	</script>
</Body>

</HTML>