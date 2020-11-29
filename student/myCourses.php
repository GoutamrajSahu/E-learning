<?php
include('../student/header.php');
include("../dbconnection.php");

if(!isset($_SESSION))
{
    session_start();
}
?>

<div class="col-lg-10 text-center"><h1>My Definitions</h1>

<?php
if(isset($_SESSION['is_login']))
{
   $stu_email = $_SESSION['stuLogemail'];
   
   $sql="SELECT c.course_id,l.course_name,c.course_des,c.course_img FROM liked AS l JOIN courses AS c 
   ON l.course_id = c.course_id WHERE l.stu_email = '$stu_email'";
   $res = $conn->query($sql);
   if($res)
   {
       $count = 1;
       while($row = mysqli_fetch_assoc($res))
        {
            if($count == 1)
            {
                echo '<div class="card-deck mt-4">';
            }
?>
   <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
           <div class="card">
               <img src="<?php echo $row['course_img']?>" class="card-img-top" alt="Guitar"/>
                   <div class="card-body">
                      <h5 class="card-tile">Name: <?php echo $row["course_name"] ?></h5>
                      <h6 class="card-id">Definition ID: <?php echo $row["course_id"] ?></h6>
                      <p class="card-text"><?php echo $row["course_des"] ?></p>
                   </div>
                   <div class="card-footer">
                     <a class="btn btn-primary text-white font-weight-bolder float-right" 
                     href="#">More</a>
                   </div>
           </div>
        </a>
<?php  
            if($count == 4)
            {
                echo '</div>';
                $count = 0;
            }    
          $count++;          
        }

    // $status = "<div class='alert alert-success'><small>Query fire success!!!</small></div>";
   }
   else
   {
     $status = "<div class='alert alert-danger'><small>Query fire failed!!!</small></div>";
   }

   
}
?>

    <!-- <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
           <div class="card">
               <img src="../image/kelly-sikkema-tQPgM1k6EbQ-unsplash.jpg" class="card-img-top" alt="Guitar"/>
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
    
</div>

<?php
if(isset($status))
{
    echo $status;
}
?>

</div> <!--div form header-->
<?php
include('../student/footer.php');
?>

