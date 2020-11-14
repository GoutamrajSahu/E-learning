<!--start Navs-->
<?php
include('../admin/header.php');
?>
<!--end Navs-->


<!--start Dashboard-->
<?php
if(!isset($_SESSION))
{
  session_start();
}
if(isset($_SESSION['admin_Is_Login']))
{
echo'<!--start Dashboard-->
  <div class="admin_details" id="admin_details" style="display:flex; justify-content:center; align-items:center; flex-direction:column; width:80%; height:70%; margin-top:5%; background-color:none;">
       <div><img src="../image/Blank-profile.jpg" class="img-thumbnail img-fluid rounded-circle" alt="Cinque Terre" width="250" height="250"></div>
       <div><h3>Admin Name</h3></div>
    <div class="row col-lg-8 pt-1" style=""> 
          <!-- start Numbers of students-->
             <div class="col-lg-6 pt-3 mb-1" style="background-color:none;">
                  <div class="card text-center">
                    <div><h1>Students:</h1></div>
                    <div><h1>70</h1></div>
                  </div>
             </div>
          <!-- end Numbers of students-->

          <!-- start Numbers of courses-->
        <div class="col-lg-6 pt-3 mb-1" style="background-color:none;">
            <div class="card text-center">
              <div><h1>Courses:</h1></div>
              <div><h1>5</h1></div>
            </div>
         </div>
          <!-- end Numbers of courses-->
    </div>
  </div>
</div>
<!--end Dashboard-->';
}
else{
  echo'<div><h2>Sorry, Only admin can access this page.</h2></div>';
}
?>
<!--end Dashboard-->


<!--start footer-->
<?php
include('../admin/footer.php');
?>
<!--end footer-->