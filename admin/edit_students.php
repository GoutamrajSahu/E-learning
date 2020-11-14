<?php
include('../admin/header.php');
include('../dbconnection.php');
?>
<div class="add_Course"><a href="../admin/addStudentForm.php"><i class="fas fa-plus" style="font-size:27px;"></i>Add Student</a></div>
<div class="container">
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
</tr>
</thead>

<tbody>
<?php
$sql = "SELECT * FROM student";
$res = $conn->query($sql);
$rows = $res->num_rows;
if($rows > 0)
{
 while($row = mysqli_fetch_assoc($res))
 {
  echo'<tr>
  <td>'.$row['stu_id'].'</td>
  <td>'.$row['stu_name'].'</td>
  <td>'.$row['stu_email'].'</td>

  <form action="../admin/edit_Single_Student.php" method="POST">
  <td>
  <input type="hidden" name="stu_id" value='.$row['stu_id'].'>
  <button class="btn btn-primary" name="edit_Single_Student"><i class="fas fa-pen" style="font-size:18px"></i></button></td>
  <td>
  </form>

  <form action="" method="POST">
  <input type="hidden" name="stu_id" value='.$row['stu_id'].'></input>
  <button class="btn btn-danger" name="delete_Student"><i class="fas fa-trash-alt" style="font-size:18px"></i></button>
  </form>
  </td>
  </tr>';
 }
}
else{
echo'<h3>No data!!!</h3>';
}

?>
    <!-- <tr>
    <td>003</td>
    <td>Goutamraj Sahu</td>
    <td>sahugoutam@gmail.com</td>
    </tr> -->
</tbody>
</table>
</div>

<!--delete student php-->
<?php
if(isset($_REQUEST['delete_Student']))
{
  $stu_id = $_REQUEST['stu_id'];
  $sql = "DELETE FROM student WHERE stu_id = '".$stu_id."'";
  $conn->query($sql);
  echo'<meta http-equiv="refresh" content="0;url=?deleted"/>';
}
?>

</div><!--div from header-->
<?php
include('../admin/footer.php')
?>