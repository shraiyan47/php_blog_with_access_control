<?php require_once 'navbar.php';
 require_once 'datalink.php';

if(isset($_GET['id']))
{

	$did = mysqli_real_escape_string($conn, $_GET['id']); 



  $postsql = mysqli_query($conn, "DELETE FROM kabadi WHERE id = '$did'");

  if ($postsql) {
    
    $_SESSION['delete'] = $did." DELETED";


    
  }

}
 ?>


 <a href="managerpanel.php">Admin Panel</a><br><br><a href="userpanel.php">User Panel</a>