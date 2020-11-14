<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!..bootstrap css..!>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!..font_awesome css..!>
    <link rel="stylesheet" href="../css/all.min.css">

    <!..google fonts..!>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    <!..custom css..!>
    <link rel="stylesheet" href="../css/style.css">

    <title>E_learning</title>
</head>
<body>
<!--Start Nav-->
<nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
            <a class = "navbar-brand" href = "../index.php">E-BOOK</a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label = "Toggle navigation">
            <span class = "navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarNav">
                <ul class = "navbar-nav pl-5">
                    <li class = "nav-item">
                    <a href = "../index.php" class = "nav-link">Home</a>
                    </li>
                    <li class = "nav-item">
                    <a href = "../courses.php" class = "nav-link">Courses</a>
                    </li>
                </ul>
            </div>
           <div class="mr-5">
               <a class = "navbar-brand" href="../admin/adminDashboard.php"><h3>Admin Dashboard</h3></a> 
           </div>
 </nav>
<!--End Nav-->

<!--start side nav-->
<?php
session_start();
if(isset($_SESSION['admin_Is_Login']))
{
  echo'<!--start side nav-->
  <div class="container-fluid" id="dashboard" style="display:flex; flex-direction:row;">
    <div class="row sidebar-sticky pt-3 container" style="width:20%;">
        <nav class="" id="sidebarMenu">
          <ul>
            <li><a href="../admin/edit_course.php">Edit Courses</a></li>
            <li><a href="../admin/edit_students.php">Edit Students</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="../admin/adminLogout.php">Log Out</a></li>
          </ul>
        </nav>
    </div>
    <!--end side nav-->';
}
?>
<!--end side nav-->