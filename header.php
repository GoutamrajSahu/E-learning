<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!..bootstrap css..!>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!..font_awesome css..!>
    <link rel="stylesheet" href="css/all.min.css">

    <!..google fonts..!>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    <!..custom css..!>
    <link rel="stylesheet" href="css/style.css">

    <title>E_learning</title>
</head>
<body>
    <!..start nav bar..!>
        <nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
            <a class = "navbar-brand" href = "index.php">E-BOOK</a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label = "Toggle navigation">
            <span class = "navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarNav">
            <ul class = "navbar-nav pl-5 ml-auto">
               <li class = "nav-item">
                <a href = "index.php" class = "nav-link">Home</a>
               </li>
               <li class = "nav-item">
                <a href = "courses.php" class = "nav-link">Courses</a>
               </li>

               <?php
               session_start();
               if((isset($_SESSION['is_login'])) && (!isset($_SESSION['admin_Is_Login'])))
               {
                   echo'<li class = "nav-item">
                   <a href = "student/student_profile.php" class = "nav-link">My Profile</a>
                  </li>
                   <li class = "nav-item">
                   <a href = "logout.php" class = "nav-link">Log Out</a>
                  </li>';
               }
               else if((!isset($_SESSION['is_login'])) && (!isset($_SESSION['admin_Is_Login'])))
               {
                   echo' <li class = "nav-item">
                   <a href = "#" class = "nav-link" data-toggle="modal" data-target="#StuLoginModelCenter">Log In</a>
                  </li>
                  <li class = "nav-item">
                  <a href = "#" class = "nav-link" data-toggle="modal" data-target="#StuRegModelCenter">SignUp</a>
                  </li>';
               }
               ?>

               <li class = "nav-item">
                <a href = "#" class = "nav-link">Contact Us</a>
               </li>

               <?php
               if(!isset($_SESSION))
               {
                session_start();
               }
               if(isset($_SESSION['admin_Is_Login']))
               {
                echo'<li class = "nav-item">
                <a href = "admin/adminLogout.php" class = "nav-link">Admin Log Out</a>
               </li>';
               }
                else{
                    echo'<li class = "nav-item">
                    <a href = "#" class = "nav-link" data-toggle="modal" data-target="#adminLoginModelCenter">Admin Log In</a>
                   </li>';
                }
               ?>
            </ul>
            </div>
        </nav>
    <!..end nav bar..!>