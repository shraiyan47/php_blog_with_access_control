<!DOCTYPE html>
<html>
<head>
	<title>Shamsu</title>
	<style type="text/css">
		input{
			min-width: 50%;
			height: 25px;
			border-radius: 5%;
		}
	</style>
</head>
<body>
<h1 align="center">LOGIN</h1>
<div align="center">

	<form method="post" action="accesscontrol.php">
		<input type="text" name="email" placeholder="Email" required><br><br><br>
		<input type="password" name="password" placeholder="Password" required><br><br><br><br>
		<input type="submit" name="login" value="LOGIN">
	</form>

	<div>
		<?php 

		session_start();
		session_destroy();
		session_unset();
		if(isset($_SESSION['log']))
		{
			echo "Login / Registration ".$_SESSION['log'];
		}

		 ?>
	</div>
</div>
</body>
</html>