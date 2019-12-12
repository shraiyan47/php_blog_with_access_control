
<?php  
require_once 'datalink.php';

if (isset($_POST['editpost'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];



	$postsql = mysqli_query($conn,"UPDATE kabadi SET name = '$name', email = '$email',	subject = '$subject', message = '$message' WHERE id='$id'");

	if ($postsql) {
		echo "POST EDITED";
		header('location: userpanel.php');
	}
	else
	{
		echo "ERROR !! ".$conn->error;
	}
}
else
{ echo "ERROR in editing input"; }




?>