<?php require_once 'navbar.php'; 

 if($_SESSION['log'] == "in" && $_SESSION['userid'] != '3'){

  $user = $_SESSION['userid'];
?>
  <br/><br/>
   <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
               
                <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    
                    
                    
                    <div class="pst-content">
                     
					 
					  <div id="postlist" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Post List</h2>
          </div>
        </div>
      </div>
	  
	  <!-- Search Area -->
	 
	   <!-- Search End -->
	   <?php 
     if (isset($_SESSION['delete'])) {
       echo $_SESSION['delete'];
     }
     

      ?>
	   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
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

    $postsql = mysqli_query($conn, "SELECT * FROM kabadi WHERE userid = '$user'");

    while($posts = mysqli_fetch_assoc($postsql))
{
     ?>
    <tr>
      <th><?php echo $posts['id']; ?></th>
      <td><?php echo $posts['name']; ?></td>
      <td><?php echo $posts['email']; ?></td>
      <td><?php echo $posts['subject']; ?></td>
	  <td><?php echo $posts['message']; ?></td>
	  <td><?php echo $posts['createdate']; ?></td>
	   <td><a href="userpaneledit.php/?id=<?php echo $posts['id']; ?>">Edit</a> <a href="userpaneldelete.php/?id=<?php echo $posts['id']; ?>">Delete</a></td>
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
                    
                     
					 
					  <div id="postcomment" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Post Post</h2>
          </div>
        </div>
      </div>
	  
	  <!-- Search Area -->
	 <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Put Your Post</div>
             

              <form action="vugichugi.php" method="post" >
                <div class="form-group">
                  <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Post Title">
                  
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                  
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Describe"></textarea>
                  
                </div>
				<div class="form-group">
                  <!-- <input type="text" class="form-control" name="publish" id="subject" placeholder="publish" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" /> -->
                  
                </div>
				
				
				
                <div class="text-center"><button type="submit" name="submit">Create Post</button></div>
              </form>
            </div>
          </div>
	   <!-- Search End -->
	   
	   
     
    </div>
  </div>
                  
				  </div>
				  </div>
				  
                    </div>
                 
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                  
                    <div class="pst-content">
                    
					
							  <div id="commentlist" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Recent Post List</h2>
          </div>
        </div>
      </div>
	  
	  <!-- Search Area -->
	  
	   <!-- Search End -->
	   
	   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Post</th>
      <th scope="col">email</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $postsql = mysqli_query($conn, "SELECT * FROM kabadi WHERE userid = '$user' ORDER BY createdate DESC");

    while($posts = mysqli_fetch_assoc($postsql))
{
     ?>
    <tr>
      <th><?php echo $posts['id']; ?></th>

    <td><?php echo $posts['message']; ?></td>
      <td><?php echo $posts['email']; ?></td>

 
     <td><a href="userpaneledit.php/?id=<?php echo $posts['id']; ?>">Edit</a> <a href="userpaneldelete.php/?id=<?php echo $posts['id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
     
    </div>
  </div>
					
					
					
					
					
					
					
                    </div>
                  </div>
                  <!-- End single post -->
                </div>
				 </div>
              
              <!-- recent end -->
            
  
  
  
  <!-- header end -->
  
  
 
  <!-- Start Slider Area -->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<?php }
else
{
  header("location: index.php");
}
 ?>
</body>