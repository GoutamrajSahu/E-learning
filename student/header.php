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
               <a class = "navbar-brand" href="../student/student_profile.php"><h3>My Profile</h3></a> 
           </div>
 </nav>
<!--end Start Nav-->

 <!--start side nav-->
<?php
session_start();
if(isset($_SESSION['is_login']))
{
  echo'<!--start side nav-->
  <div class="row" id="dashboard" style="display:flex; flex-direction:row; width:101%;">
    <div class="sidebar-sticky pt-3 col-lg-2 alert alert-primary">
        <nav class="container" id="sidebarMenu">
          <ul>
            <li><a href="edit_profile.php">Edit Profile</a></li>
            <li><a href="#">My Courses</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="../student/stu_log_out.php">Log Out</a></li>
          </ul>
        </nav>
    </div>
    <!--end side nav-->';
}
?>
<!--end side nav-->