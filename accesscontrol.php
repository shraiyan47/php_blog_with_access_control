<?php 

require_once 'datalink.php';


if (isset($_POST['regi'])) {
	$un = $_POST['username'];
	$mail = $_POST['email'];
	$pass = $_POST['password'];
	date_default_timezone_set('Asia/Dhaka');
	$createdate = date("Y-m-d H:i:s");

	$regisql = mysqli_query($conn, "INSERT INTO user(username, email, password, createdate ) VALUES('$un','$mail','$pass','$createdate')");

	if($regisql)
	{
		session_start();

		$_SESSION['log'] = "done";

		header("Location: userpanel.php");
	}
	else
	{
		session_start();

		$_SESSION['log'] = "fail".$conn->error;

		header("Location: index.php");
	}

}

if (isset($_POST['login'])) {
	
	$mail = $_POST['email'];
	$pass = $_POST['password'];
	date_default_timezone_set('Asia/Dhaka');
	$createdate = date("Y-m-d H:i:s");

	$loginsql = mysqli_query($conn, "SELECT id FROM user WHERE email = '$mail' AND password = '$pass' ");

	$row = mysqli_fetch_assoc($loginsql);
	if($row)
	{
		$x = $row['id'];
		session_start();

		$_SESSION['log'] = 'in';

		$_SESSION['userid'] = $x;

		if($x != 3){
		header("Location: userpanel.php");}
		else
		{
			header("Location: managerpanel.php");
		}
	}
	else if(!$row)
	{
		$x = $row['id'];
		session_start();

		$_SESSION['log'] = 'in';

		$_SESSION['userid'] = $x;

		if($x != 3){
		header("Location: userpanel.php");}
		else
		{
			header("Location: managerpanel.php");
		}
	}
	else
	{
		session_start();

		$_SESSION['log'] = "fail";

		header("Location: index.php");
	}

}
	
 ?>
