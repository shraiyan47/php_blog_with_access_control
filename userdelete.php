<?php require_once 'navbar.php';
 require_once 'datalink.php';

if(isset($_GET['id']))
{

	$did = mysqli_real_escape_string($conn, $_GET['id']); 



  $usersql = mysqli_query($conn, "DELETE FROM user WHERE id = '$did'");
  $usersql = mysqli_query($conn, "DELETE FROM kabadi WHERE userid = '$did'");

  if ($usersql) {
    
    $_SESSION['udelete'] = $did." DELETED";
    header('location: managerpanel.php');
    
  }

}
 ?>