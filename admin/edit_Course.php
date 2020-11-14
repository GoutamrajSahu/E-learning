<!--start Navs-->
<?php
include('../admin/header.php');
include('../dbconnection.php');
?>

<!--end Navs-->
<div class="add_Course"><a href="../admin/addCourseForm.php"><i class="fas fa-plus" style="font-size:27px;"></i>Add Course</a></div>
<div class="row col-lg-10">
<div class="container-fluid">       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Course_ID</th>
        <th>Course_Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>

<?php
$sql = 'SELECT * FROM courses';
$result = $conn->query($sql);
if($result->num_rows > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    echo'<tr>
    <td><strong>'.$row['course_id'].'</strong></td>
    <td>'.$row['course_name'].'</td>
    <td>'.$row['course_des'].'</td>
    <td>
    <form method="POST" class="d-inline" action="edit_single_course.php">
      <input type="hidden" value="'.$row['course_id'].'" name="course_id"></input>
      <button class="btn btn-primary" name="edit_Single_Course"><i class="fas fa-pen" style="font-size:18px"></i></button>
    </form>
    <form class="d-inline" method="POST">
      <input type="hidden" value="'.$row['course_id'].'" name="course_id"></input>
      <button class="btn btn-danger" name="delete_course"><i class="fas fa-trash-alt" style="font-size:18px"></i></button>
    </form>
    </td>
  </tr>';
  } 
}
else{
  echo 'No Data !!!';
}
?>
      <!-- <tr>
        <td><strong>2</strong></td>
        <td>C++ Language</td>
        <td>Learn from C++ basics</td>
        <td><a href="#"><i class='fas fa-pen mr-3' style='font-size:18px'></i></a>
        <a href="#"><i class='fas fa-trash-alt' style='font-size:18px' onclick="remove_course()"></i></a></td>
      </tr> -->
    </tbody>
  </table>
</div>
</div>
</div><!--div from header-->

<?php
 if(isset($_REQUEST['delete_course']))
 {
  //  $delete_course_id = $_REQUEST['course_id'];

 $sql = "DELETE FROM courses WHERE course_id = {$_REQUEST['course_id']}";
 $conn->query($sql);
//  echo"<script>location.href = '../admin/edit_Course.php' </script>";
 echo'<meta http-equiv="refresh" content="0;URL=?deleted"/>';
 }
?>

<!--start footer-->
<?php
include('../admin/footer.php');
?>
<!--end footer-->