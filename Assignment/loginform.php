<?php



?>
<HTML>
<header><title>Comment</title></header>
<Body>
<form name="guestbook" method="post" action="login.php" onSubmit="return validateForm()">
	
	
 	                  
			  Email : <input type="text" name="email" id="txtemail"><br>
			  Password : <input type="password" name="pass1" id="txtpw"><br>
			
			<pre>                       <input type="submit" name="btnlogin" value = "Login"/>
	                       <a href="login.php">Login</a></pre>
</pre>   
</form>


<script type="text/javascript">
		function validateForm()
		{
			
			
			var email= document.getElementById("txtemail").value;
			
			var passwd= document.getElementById("txtpw").value;
			
			
			
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
			
			if(name !="")
			{
					if (email.match(mailformat)) 
					{
							if(passwd.length>8)
							{
								

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
			
			
	
	}
		
	</script>
</Body>

</HTML>