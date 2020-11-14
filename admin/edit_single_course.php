<?php
include('../admin/header.php');

include('../dbconnection.php');

if(isset($_REQUEST['edit_Single_Course']))
{
  $course_id = $_REQUEST['course_id'];
  $sql = "SELECT * FROM courses WHERE course_id='".$course_id."'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_assoc($result);
}


if(isset($_REQUEST['courseSubmit']))
{
  if((!$_REQUEST['course_id'] == "") && (!$_REQUEST['Course_Name'] == "") && 
    (!$_REQUEST['Description'] == "") && (!$_FILES['Course_Image']['name'] == ""))
    {
          $course_id = $_REQUEST['course_id'];
          $Course_Name = $_REQUEST['Course_Name'];
          $Description = $_REQUEST['Description'];
          $Course_Image = $_FILES['Course_Image']['name'];
          $Course_Image_tmp = $_FILES['Course_Image']['tmp_name'];
          $img_Folder = "../image/course_img/".$Course_Image;
          move_uploaded_file($Course_Image_tmp,$img_Folder);

          $sql1 = "UPDATE courses SET course_name='$Course_Name',course_des='$Description',course_img='$img_Folder' WHERE course_id='".$course_id."'";
        
          // echo'<meta http-equiv="refresh" content="0;URL=?deleted"/>';
          
          if($conn->query($sql1) == TRUE)//Query trigger for updating new data.
          $status = "<div class='alert alert-success'><small>Updated Successfully!!!</small></div>";
          else
          $status = "<div class='alert alert-danger'><small>Failed!!!</small></div>";
    }
    else
    {
          $status = "<div class='alert alert-danger'><small>Please fill all fields and also attach a new image.</small></div>";
    }

   $course_id = $_REQUEST['course_id'];
   $sql2 = "SELECT * FROM courses WHERE course_id='".$course_id."'"; 
   $result = $conn->query($sql2);//Query trigger for displaying updated data.
   $row = mysqli_fetch_assoc($result);
}
?>


<form action="" method="POST" enctype="multipart/form-data">  <!--IMP--> <!--enctype="multipart/form-data" IS IMP FOR IMAGE-->
  <div class="form-group">
    <label for="email">Course Name:</label>
    <input type="text" class="form-control" placeholder="Enter Course Name" id="Course_Name" name="Course_Name" value='<?php echo $row['course_name']; ?>'>
  </div>
  <div class="form-group">
    <label for="pwd">Description:</label>
    <input type="text" class="form-control" placeholder="Enter Description" id="Description" name="Description" value='<?php echo $row['course_des']; ?>'>
  </div>
  <div class="form-group">
    <label for="pwd">Attach the course image:</label>
    <input type="file" class="form-control-file" id="Course_Image" name="Course_Image" value='<?php echo $row['course_img']; ?>'>
  </div>
  <div><input type="hidden" value='<?php echo $row['course_id']; ?>' name="course_id"></input></div>
  <button type="submit" class="btn btn-primary" id="courseSubmit" name="courseSubmit">Update</button>
</form>
<div><img src='<?php echo $row['course_img']; ?>' class="img-thumbnail" height="200px" width="400px"></div>


<?php
if(isset($status))
{
  echo ($status);
}
?>

</div><!--div from header-->

<!--start footer-->
<?php
include('../admin/footer.php');
?>
<!--end footer-->