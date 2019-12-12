<?php require_once 'navbar.php'; 

 if($_SESSION['log'] == "in" && $_SESSION['userid'] == '3'){
?>
  <br/><br/>
   <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
               
                <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    
                    
                    
                    <div class="pst-content">
                     
				 
					  <div id="userlist" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>User List</h2>
          </div>
        </div>
      </div>
	            <?php 
     if (isset($_SESSION['udelete'])) {
       echo $_SESSION['udelete'];
     }
     

      ?>  
	  <!-- Search Area -->
	  <div class="md-form mt-0">
      <input class="form-control" type="text" placeholder="Search" aria-label="Search">
       </div>
	   <!-- Search End -->

	   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    require_once 'datalink.php';
    $usersql = mysqli_query($conn,"SELECT * FROM user");

    while ($row = mysqli_fetch_assoc($usersql)) {
      
    
     ?>
    <tr>
      <th><?php echo $row['id']; ?></th>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td> <a href="userdelete.php/?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
     
    </div>
  </div>

					 
					 
					 
					 
					 
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    
                    <div class="pst-content">
                    
                     
					 
					  <div id="postlist" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Post</h2>
          </div>
        </div>
      </div>
	  
	  <!-- Search Area -->
	  <div class="md-form mt-0">
      <input class="form-control" type="text" placeholder="Search" aria-label="Search">
       </div>
	   <!-- Search End -->
	   
	     <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th>USER</th>
      <th scope="col">Title</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
    <th scope="col">Post</th>
    <th scope="col">Post Date</th>
    <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

    require_once 'datalink.php';

    $postsql = mysqli_query($conn, "SELECT *,kabadi.id AS id FROM kabadi LEFT JOIN user ON user.id = kabadi.userid ORDER BY kabadi.createdate DESC");

    while($posts = mysqli_fetch_assoc($postsql))
{

     ?>
    <tr>
      <th><?php echo $posts['id']; ?></th>
      <th><?php echo $posts['username']; ?></th>

      <td><?php echo $posts['name']; ?></td>
      <td><?php echo $posts['email']; ?></td>
      <td><?php echo $posts['subject']; ?></td>
    <td><?php echo $posts['message']; ?></td>
    <td><?php echo $posts['createdate']; ?></td>
     <td> <a href="userpaneldelete.php/?id=<?php echo $posts['id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
     
    </div>
  </div>
                  
				  </div>
				  </div>
				  
                  <!-- End single post -->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<?php } ?>
</body>

</html>
