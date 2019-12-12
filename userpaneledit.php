<?php require_once 'navbar.php';
 require_once 'datalink.php';

if(isset($_GET['id']))
{

	$id = mysqli_real_escape_string($conn, $_GET['id']); 
 ?>
 <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
               
                <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    
                    
                    
                    <div class="pst-content">
                     
					 
					  <div id="postlist" class="about-area area-padding">
    <div class="container">

    						  <div id="postcomment" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Post Comment</h2>
          </div>
        </div>
      </div>
	  
	  <!-- Search Area -->
	 <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Put Your Comment</div>
             
 <?php

   

    $postsql = mysqli_query($conn, "SELECT * FROM kabadi WHERE id = '$id'");

   $posts = mysqli_fetch_assoc($postsql);


     ?>
              <form action="http://localhost/kabadi/editpost.php" method="post" >
                <div class="form-group">
                  
                  <input type="hidden" name="id" value="<?php echo $id; ?>" />
                  <input type="text" name="name" class="form-control" id="name" placeholder="Title" value="<?php echo $posts['name']; ?>" />
                  
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $posts['email']; ?>"  />
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Tags / Cetagories"  value="<?php echo $posts['subject']; ?>" />
                  
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="POST"><?php echo $posts['message']; ?>" </textarea>
                  
                </div>
				
                <div class="text-center"><button type="submit" name="editpost">Edit POst</button></div>
              </form>
            </div>
          </div>
	   <!-- Search End -->
	   
	   <?php  } ?>
     
    </div>
  </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>