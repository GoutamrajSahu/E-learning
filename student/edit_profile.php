<?php
include('../student/header.php');
include('../dbconnection.php');
if(!isset($_SESSION))
{
    session_start();
}

if(isset($_SESSION['is_login']))
    {
        $stu_email = $_SESSION['stuLogemail'];
        $sql = "SELECT * FROM student WHERE stu_email = '".$stu_email."'";
        $res = $conn->query($sql);
        if($res->num_rows == 1)
        {
            $row = mysqli_fetch_assoc($res);
        }
        else
        {
            $status = "<div class='alert alert-danger'><small>failed to fetch</small></div>";
        }
    }

if(isset($_REQUEST['Update_student']))
    {
        if((!$_REQUEST['stu_id']=="") && (!$_REQUEST['stu_name']=="") && (!$_REQUEST['stu_email']=="") && (!$_REQUEST['stu_occ']==""))
        {
        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_occ = $_REQUEST['stu_occ'];
        $check_img = $_FILES['stu_new_img']['name'];
          if(!$check_img == "")
          {
              $profile_img = $_FILES['stu_new_img']['name'];
              $profile_img_tmp =  $_FILES['stu_new_img']['tmp_name'];
              $img_folder = '../image/student_img/'.$profile_img;
              move_uploaded_file($profile_img_tmp,$img_folder);
          }
          else
          {
              $img_folder = $_REQUEST['stu_prev_img'];
          }
         
         $sql = "UPDATE student set stu_name='$stu_name', stu_email='$stu_email', stu_name='$stu_name', stu_occ='$stu_occ', stu_image='$img_folder'
           WHERE stu_id = '{$_REQUEST['stu_id']}' AND stu_email = '".$stu_email."'"; 
           if($conn->query($sql)==TRUE)
           {
            $stu_email = $_SESSION['stuLogemail'];
            $sql = "SELECT * FROM student WHERE stu_email = '".$stu_email."'";
            $res = $conn->query($sql);
            if($res->num_rows == 1)
            {
                $row = mysqli_fetch_assoc($res);
            }
               $status= "<div class='alert alert-success'><small>Updated Successfully!!!</small></div>";
           }
           else
           {
            $status= "<div class='alert alert-danger'><small>Update Failed!!!</small></div>";
           }

        }
        else
           {
            $status= "<div class='alert alert-danger'><small>Please fill all fields!!!</small></div>";
           }
    }
?>

<?php
if(isset($_SESSION['is_login']))
{
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group" >
        <label for="name"><strong>Name:</strong></label>
        <input class="form-control" name="stu_name" value="<?php echo''.$row['stu_name'].''?>">
    </div>
    <div class="form-group">
        <label for="id"><strong>ID:</strong></label>
        <input class="form-control" name="stu_id" value="<?php echo $row['stu_id'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="email"><strong>Email:</strong></label>
        <input class="form-control" name="stu_email" value="<?php echo $row['stu_email'] ?>">
    </div>
    <div class="form-group">
        <label for="occupation"><strong>Occupation:</strong></label>
        <input class="form-control" name="stu_occ" value="<?php echo $row['stu_occ'] ?>">
    </div>
    <div class="form-group">
        <label for="image"><strong>Image:</strong></label>
        <input type="hidden" class="form-control" name="stu_prev_img" value="<?php echo $row['stu_image']?>">
        <input type="file" class="form-control" name="stu_new_img">
    </div>
    <div>
     <button class="btn btn-primary" Type="submit" name="Update_student">Update</button>
    </div>
</form>
<div>
  <img class="img-thumbnail rounded-circle"src="<?php echo $row['stu_image']?>" height="500px" width="500px">
</div>


<?php
}
else{
    $status = "<div class='alert alert-danger'><h3>Please login first!!!</h3></div>";
}
?>

<?php
if(isset($status))
{
    echo $status;
}
?>
</div><!--div form header-->
<?php
include('../student/footer.php');
?>