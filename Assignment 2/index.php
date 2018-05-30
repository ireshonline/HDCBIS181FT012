
<?php if(isset($_COOKIE['email']) && $_COOKIE['pass']){ ?>
			<h1> Welcome ..... ! </h1>

		<?php }else{ ?>

		header("location:loginform.html");

		<?php } ?>