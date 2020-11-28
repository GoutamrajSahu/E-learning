 <!..start of header..!>
 <?php
      include("header.php");
      include("dbconnection.php");
 ?>
<!..start all courses..!>
       <div class="container mt-5">
       <h1 class="text-center">All Courses</h1>
       
  <?php
      $sql = "SELECT * FROM courses";
      $res = $conn->query($sql);
  ?>
  <?php  
      if($res->num_rows > 0)
      {
         $count = 1;
         while($row = mysqli_fetch_assoc($res))
         {
            if($count == 1) 
            {
               echo'<div class="card-deck mt-4">';
            }
   ?>
 <!..end of header..!>

    <!.. start of first cards div..!>
        <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
           <div class="card">
               <img src="<?php echo str_replace('..','.',$row['course_img'])?>" class="card-img-top" alt="Guitar"/>
                   <div class="card-body">
                      <h6 class="card-tile" id="courseId"><?php echo $row['course_id']?></h6>
                      <h5 class="card-tile" id="courseName"><?php echo $row['course_name']?></h5>
                      <p class="card-text" id="courseDesc"><?php echo $row['course_des']?></p>
                   </div>
                   <div class="card-footer">
                   <?php echo'<a class="btn btn-primary text-white font-weight-bolder float-right" 
                     href="coursedetails.php?courseId='.$row['course_id'].'" id="like">See Definitions</a>';?>
                   </div>
           </div>
        </a>
  
    <!..end of first cards div!>

   <?php
         if($count == 3) 
         {
            echo'</div>';
            $count = 0;
         }
        $count++; 
      }
   }
   else
   {
      $status = "<div class='alert alert-danger'><small>Empty...!!!</small></div>";
   }
  ?>
         
    <!..start of 2nd cards div..!>
    <!-- <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
           <div class="card">
               <img src="image/kelly-sikkema-tQPgM1k6EbQ-unsplash.jpg" class="card-img-top" alt="Guitar"/>
                   <div class="card-body">
                      <h5 class="card-tile">learn Guitar Easy way</h5>
                      <p class="card-text">Quick-start gear guide: Guitars, tuners, picks etc</p>
                   </div>
                   <div class="card-footer">
                     <a class="btn btn-primary text-white font-weight-bolder float-right" 
                     href="#">Enroll</a>
                   </div>
           </div>
        </a>
    </div> -->
    <!..end of 2nd cards div..!>
  <!..end all courses..!>
  

  <!..start of student registration form..!>
         <?php 
         include("registration.php");
         ?>
  <!..end of student registration form..!>
    
  <!..start of student login form..!>
            <?php
            include("login.php");
            ?>
  <!..end of student login form..!>

  <!..start of admin login form..!> 
     <?php
     include("adminLogin.php");
     ?>
  <!..end of admin login form..!>

 <!..start of footer..!>
    <?php
      include("footer.php");
    ?>
<!..end of footer..!>