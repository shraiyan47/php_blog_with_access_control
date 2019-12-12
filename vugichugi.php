<?php 

require_once 'datalink.php';

if (isset($_POST['submit'])) {
	$userid = $_POST['userid'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	date_default_timezone_set('Asia/Dhaka');
	$createdate = date("Y-m-d H:i:s");

	$postsql = mysqli_query($conn,"INSERT INTO kabadi(userid,	name,	email,	subject,	message,	createdate) VALUES('$userid','$name','$email','$subject','$message','$createdate') ");

	if ($postsql) {
		echo "POST SUBMITTED";
		header('location: userpanel.php');
	}
	else
	{
		echo "ERROR !! ".$conn->error;
	}
}


 ?>

