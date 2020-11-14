<?php
include('../admin/header.php');
include('../dbconnection.php');

//data showing
if(isset($_REQUEST['edit_Single_Student']))
{
$sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['stu_id']}";
$res = $conn->query($sql);
$rows = $res->num_rows;
if($rows == 1)
{
 $row = mysqli_fetch_assoc($res);
}
else
{
    $status="<div class='alert alert-danger'><small>Error!!!</small></div>";
}
}

//data updating
if(isset($_REQUEST['update_student']))
{
    if((!$_REQUEST['stu_id']=="") && (!$_REQUEST['stu_name']=="") &&
     (!$_REQUEST['stu_email']=="") && (!$_REQUEST['stu_occ']==""))
     {
        $stu_id = $_REQUEST['stu_id'];
        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_occ = $_REQUEST['stu_occ'];
        $stu_img_check = $_FILES['stu_image']['name'];
        if(!$stu_img_check == "")
         {
          $stu_image = $_FILES['stu_image']['name'];
          $stu_image_tmp = $_FILES['stu_image']['tmp_name'];
          $stu_image_folder = "../image/student_img/".$stu_image;
          move_uploaded_file($stu_image_tmp,$stu_image_folder);
         }
         else
            {
            $stu_image_folder = $_REQUEST['stu_prev_image'];  
            // $status="<div class='alert alert-danger'><small>Not proper!!!</small></div>";
            } 

        $sql = "UPDATE student SET stu_name = '$stu_name', stu_email = '$stu_email', stu_occ = '$stu_occ', stu_image = '$stu_image_folder' 
        WHERE stu_id ='".$stu_id."'";
        if($conn->query($sql))
        {
            $status="<div class='alert alert-success'><small>Updated successfully!!!</small></div>";
        }
        else{
            $status="<div class='alert alert-danger'><small>Updated failed!!!</small></div>";
        }
     }
     else
     {
        $status="<div class='alert alert-danger'><small>Please fill all fields!!!</small></div>";
     }
 $sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['stu_id']}";
 $res = $conn->query($sql);
 $rows = $res->num_rows;
 $row = mysqli_fetch_assoc($res);
}

?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="id">ID:</label>
    <input class="form-control" type="text" value="<?php echo $row['stu_id'];?>" name="stu_id" readonly>
    </div>

    <div class="form-group">
    <label for="name">Name:</label>
    <input class="form-control" type="text" name="stu_name" value="<?php echo $row['stu_name']?>">
    </div>

    <div class="form-group">
    <label for="email">Email:</label>
    <input class="form-control" type="text" name="stu_email" value="<?php echo $row['stu_email']?>">
    </div>

    <div class="form-group">
    <label for="occupation">Occupation:</label>
    <input class="form-control" type="text" name="stu_occ" value="<?php echo $row['stu_occ'];?>">
    </div>

    <div class="form-group">
    <label for="img">Profile Image:'optional'</label>
    <input class="form-control" type="hidden" name="stu_prev_image" value="<?php echo $row['stu_image'];?>">
    <input class="form-control-file" name="stu_image" type="file">
    </div>

    <div class="form-group">
    <button class="btn btn-primary" type="submit" name="update_student">Update</button>
    </div>

    <div>
    <?php
    if(isset($status))
     {
         echo $status;
     }
    ?>
    </div>
</form>
<div class="">
    <img class="img-thumbnail" height="200px" width="400px"" src="<?php echo $row['stu_image'];?>">
</div>

</div><!--div from header-->
<?php
include('../admin/footer.php');
?>