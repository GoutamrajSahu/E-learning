 <!..start of header..!>
    <?php
    include("header.php");
    ?>
 <!..end of header..!>

<!..start all courses..!>
 <div class="container mt-5">
       <h1 class="text-center">All Courses</h1>
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
                     href="coursedetails.php">Enroll</a>
                   </div>
           </div>
        </a>
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
  <!..end all courses..!>

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