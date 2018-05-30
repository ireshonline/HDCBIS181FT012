<?php session_start();

?>
<HTML>
<header><title>Comment</title></header>
<Body>
<form name="guestbook" method="post" action="save.php">
	<pre>
		Comment : <textarea name="comment"></textarea>
  		Name : <input type="text" name="name">
		                        <input type="submit" name="btnSubmit" value = "submit"/></form>
		<form name="login"  method ="post" action="loginform.php"> 
		                         <input type="submit" name="btnlogin" value = "Login" "/></form> 
	                       <a href="register.php">Create an account</a><br>
</pre>

</Body>

</HTML>