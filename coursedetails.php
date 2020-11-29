<!..start of header..!>
    <?php
    include("header.php");
    include("dbconnection.php");

    if(!isset($_SESSION))
      {
        session_start();
      }
     
    $courseId = $_GET['courseId'];
    $sql = "SELECT * from courses WHERE course_id = '".$courseId."'";
    $res = $conn->query($sql);
    if($res->num_rows == 1)
    {
      $row = mysqli_fetch_assoc($res);
    }
    else
    {
      $status = "<div class='alert alert-danger'><small>failed to fetch</small></div>";
    }
     
    //like
    if(isset($_REQUEST['Like']))
    {
      if(isset($_SESSION['is_login']))
      {
       $stu_Email = $_SESSION['stuLogemail'];
       $courseId = $_GET['courseId'];
       $courseName = $row['course_name'];

       $sql = "INSERT INTO liked (stu_email,course_id,course_name) VALUES ('$stu_Email','$courseId','$courseName')";
        if($conn->query($sql)==TRUE)
        {
          $status = "<div class='alert alert-success'><small>like success</small></div>";
        }
        else
        {
          $status = "<div class='alert alert-primary'><small>Like update failed</small></div>";
        }
      }
      else
      {
        $status = "<div class='alert alert-danger'><small>like failed!!!<br>Please login first.<br>If not registered then please resister then login.</small></div>";
      }
    }

    //dislike
    


    ?>
 <!..end of header..!>

<!..start course details banner..!>
<div class="container-field bg-dark">
<div>
<img src="<?php echo str_replace('..','.',$row['course_img'])?>" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
</div>
</div>
<!..end course details banner..!>

<!..start course details main content..!>
<div class="container mt-5">
<div class="row">
<div class="col-md-4">
  <img src="<?php echo str_replace('..','.',$row['course_img'])?>" alt="Guitar" class="card-img-top">
</div>
<div class="col-md-8">
  <div class="card-body">
    <h5 class="card-title">
     Name:<?php echo $row['course_name']?>
    </h5>
    <p class="card-text">
     <strong>Definition:</strong><?php echo str_replace('..','.',$row['course_des'])?>
    </p>
    <p class="card-text">
     Number of optional definitions:3 -> NOT DYNAMIC yet.
    </p>
    <form action="" method="post">
       <?php
        if(isset($_SESSION['is_login']))
        {
          $stu_Email = $_SESSION['stuLogemail'];
          $courseId = $_GET['courseId'];
          $sql = "SELECT * FROM liked WHERE stu_email = '".$stu_Email."' AND course_id = '".$courseId."'";
          
          $res = $conn->query($sql);
          $rows = $res->num_rows;
          if($rows == 1)
            {
              echo '<button type="submit" class="btn btn-warning text-white font-weight-bolder float-right" name="DisLike">
              Dislike
            </button>';
            }
            else
            {
              echo '<button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="Like">
              Like
            </button>';
            }
        }
        else
        {
          echo '<button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="Like">
          Like
         </button>';
        }
       ?>
    </form>
  </div>
</div>
</div>
Table is NOT DYNAMIC yet.
 <div class="container">
   <div class="row">
     <table class="table table-bordered table-hover">
       <thead>
         <tr>
           <th scope="col">Definition No.</th>
           <th scope="col">Definition </th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">
            1
           </th>
           <td>
           C programming is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer language.
           </td>
         </tr>
         <tr>
           <th scope="row">
            2
           </th>
           <td>
           C programming is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer language.
           </td>
         </tr>
         <tr>
           <th scope="row">
            3
           </th>
           <td>
           C programming is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer language.
           </td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>
</div>

<?php
if(isset($status))
{
    echo $status;
}
?>
<!..end course details main content..!>

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