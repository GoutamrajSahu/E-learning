<?php
include('header.php');
include('../dbconnection.php');

if(isset($_REQUEST['student_submit']))
{
    if((!$_REQUEST['stu_name'] == "") && (!$_REQUEST['stu_email'] == "") && (!$_REQUEST['stu_password'] == "") && 
    (!$_REQUEST['stu_occupation'] == "") && (!$_FILES['stu_image']['name'] == ""))
    {
        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_password = $_REQUEST['stu_password'];
        $stu_occupation = $_REQUEST['stu_occupation'];
        $stu_image = $_FILES['stu_image']['name'];
        $stu_image_tmp = $_FILES['stu_image']['tmp_name'];
        $stu_image_folder = '../image/student_img/'.$stu_image;
        move_uploaded_file($stu_image_tmp,$stu_image_folder);

        $sql = "INSERT INTO student(stu_name,stu_email,stu_pass,stu_occ,stu_image) VALUES('$stu_name','$stu_email','$stu_password','$stu_occupation','$stu_image_folder')";
        if($conn->query($sql)==TRUE)
        {
            $status = "<div class='alert alert-success'><small>Student added successfully!!!</small></div>";
        }
        else{
            $status = "<div class='alert alert-danger'><small>Student adding failed!!!</small></div>";
        }
    }
    else
    {
      $status = "<div class='alert alert-danger'><small>Please fill all fields.</small></div>";
    }
}

?>

<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
 <label for="name">Name:</label>
 <input class="form-control" type="text" name="stu_name">
</div> 
<div class="form-group">
 <label for="email">Email:</label>
 <input class="form-control" type="email" name="stu_email">
</div> 
<div class="form-group">
 <label for="pwd">Password:</label>
 <input class="form-control" type="password" name="stu_password">
</div> 
<div class="form-group">
 <label for="occ">Occupation:</label>
 <input class="form-control" type="text" name="stu_occupation">
</div> 
<div class="form-group">
 <label for="img">Image:</label>
 <input type="file" name="stu_image">
</div>
<div class="form-group">
 <button class ="btn btn-primary" type="submit" name="student_submit">Add</button>
</div>
<div>
  <?php
     if(isset($status))
     {
         echo($status);
     }
  ?>
</div> 
</form>

</div><!--from header-->
<?php
include('footer.php');
?>