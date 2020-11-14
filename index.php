    <!..start of header..!>
    <?php
    include("header.php");
    ?>
    <!..end of header..!>

    <!..start background..!>
    <div class="container-fluid front-content">
        <div class="my-content">
         <h1>Welcome to E-BOOK</h1>
        </div>
        <div>

            <?php
            if(isset($_SESSION['admin_Is_Login']))
            {
                echo'<a href = "admin/adminDashboard.php" class="btn btn-warning">Dashboard</a>';
            }
            else if((!isset($_SESSION['is_login'])) && (!isset($_SESSION['admin_Is_Login'])))
            {
                echo'<a href="#" class="btn btn-dark"  data-toggle="modal" data-target="#StuRegModelCenter">Get Started</a>';
            }
            else if(isset($_SESSION['is_login']) && (!isset($_SESSION['admin_Is_Login'])))
            {
                echo'<a href = "student/student_profile.php" class="btn btn-primary ">My Profile</a>';
            }
            ?>
            


        </div>    
    </div>
    <!..end background..!>

    <!..start popular Courses cards..!>
   <div class="container mt-5">
       <h1 class="text-center">Popular Courses</h1>
    <!.. start of first cards div..!>
    <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
           <div class="card">
               <img src="image/course_img/Guitar.jpg" class="card-img-top" alt="Guitar"/>
                   <div class="card-body">
                      <h5 class="card-tile">learn Guitar Easy way</h5>
                      <p class="card-text">Quick-start gear guide: Guitars, tuners, picks etc</p>
                   </div>
                   <div class="card-footer">
                     <a class="btn btn-primary text-white font-weight-bolder float-right" 
                     href="#">Enroll</a>
                   </div>
           </div>
        </a>
        <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="image/course_img/c L.jpeg" class="card-img-top" alt="Guitar"/>
                    <div class="card-body">
                       <h5 class="card-tile">learn C Language</h5>
                       <p class="card-text">Basic Of C Language</p>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-primary text-white font-weight-bolder float-right" 
                      href="#">Enroll</a>
                    </div>
            </div>
         </a>
    </div>
    <!..end of first cards div!>
    <!..start of 2nd cards div..!>
    <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
           <div class="card">
               <img src="image/kelly-sikkema-tQPgM1k6EbQ-unsplash.jpg" class="card-img-top" alt="Guitar"/>
                   <div class="card-body">
                      <h5 class="card-tile">learn Guitar Easy way</h5>
                      <p class="card-text">Quick-start gear guide: Guitars, tuners, picks etc</p>
                   </div>
                   <div class="card-footer">
                     <a class="btn btn-primary text-white font-weight-bolder float-right" 
                     href="#">Enroll</a>
                   </div>
           </div>
        </a>
        <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="image/kelly-sikkema-tQPgM1k6EbQ-unsplash.jpg" class="card-img-top" alt="Guitar"/>
                    <div class="card-body">
                       <h5 class="card-tile">learn Guitar Easy way</h5>
                       <p class="card-text">Quick-start gear guide: Guitars, tuners, picks etc</p>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-primary text-white font-weight-bolder float-right" 
                      href="#">Enroll</a>
                    </div>
            </div>
         </a>
    </div>
    <!..end of 2nd cards div..!>
        <div class="text-center m2">
            <a class="btn btn-danger btn-sm" href="courses.php">View All</a>
        </div>
   </div>
    <!..end popular Courses cards..!>

    <!..start contact us..!>
         <?php
         include("contact.php"); 
         ?>
    <!..end contact us..!>


    <!..start of student registration form..!>
         <?php 
         include("registration.php");
         ?>
    <!..end of student registration form..!>


    <!..start of student login form..!>
            <?php
            include("login.php");
            ?>
    <!..end of student login form..!>


    <!..start of admin login form..!> 
     <?php
     include("adminLogin.php");
     ?>
    <!..end of admin login form..!>


    <!..start of footer..!>
    <?php
      include("footer.php");
    ?>
    <!..end of footer..!>