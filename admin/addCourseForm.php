<?php
include('../admin/header.php');
include('../dbconnection.php');

if(isset($_REQUEST['courseSubmit'])) /*IMP*/
{
  if((!($_REQUEST['Course_Name'] == "")) && (!($_REQUEST['Description'] == "")))
  {
    $Course_Name = $_REQUEST['Course_Name'];
    $Description = $_REQUEST['Description'];
    $Course_Image = $_FILES['Course_Image']['name'];  /*IMP FOR IMAGE*/
    $Course_Image_Tmp = $_FILES['Course_Image']['tmp_name'];  /*IMP FOR IMAGE*/
    $img_folder = "../image/course_img/".$Course_Image;  /*IMP FOR IMAGE*/
    move_uploaded_file($Course_Image_Tmp,$img_folder);  /*IMP FOR IMAGE*/

    $sql = "INSERT INTO courses (course_name,course_des,course_img) VALUES ('$Course_Name','$Description','$img_folder')";

    if($conn->query($sql) == TRUE)
    {
      $status = '<div class="alert alert-success"><h5>Added successfully.</h5></div>'; 
    }
  }
  else{
    $status = '<div class="alert alert-danger"><h5>Fill all fields.</h5></div>';
  }
}

?>

<form action="" method="POST" enctype="multipart/form-data">  <!--IMP--> <!--enctype="multipart/form-data" IS IMP FOR IMAGE-->
  <div class="form-group">
    <label for="name">Course Name:</label>
    <input type="text" class="form-control" placeholder="Enter Course Name" id="Course_Name" name="Course_Name">
  </div>
  <div class="form-group">
    <label for="des">Description:</label>
    <input type="text" class="form-control" placeholder="Enter Description" id="Description" name="Description">
  </div>
  <div class="form-group">
    <label for="img">Attach the course image:</label>
    <input type="file" class="form-control-file" id="Course_Image" name="Course_Image">
  </div>
  <button type="submit" class="btn btn-primary" id="courseSubmit" name="courseSubmit">Submit</button>
  <?php
  if(isset($status))
  {echo($status);}
  ?>
</form>

</div><!--div from header-->
<?php
include('../admin/footer.php')
?>