<!..start of header..!>
    <?php
    include("header.php");
    ?>
 <!..end of header..!>

<!..start course details banner..!>
<div class="container-field bg-dark">
<div>
<img src="image/course_img/Guitar.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
</div>
</div>
<!..end course details banner..!>

<!..start course details main content..!>
<div class="container mt-5">
<div class="row">
<div class="col-md-4">
  <img src="image/course_img/Guitar.jpg" alt="Guitar" class="card-img-top">
</div>
<div class="col-md-8">
  <div class="card-body">
    <h5 class="card-title">
     Course Name: Learn Guitar
    </h5>
    <p class="card-text">
     Description: Quick-start gear guide: Guitars, tuners, picks etc.
    </p>
    <p class="card-text">
     Duration:10 Days
    </p>
    <form action="" method="post">
       <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">
        Learn Now
       </button>
    </form>
  </div>
</div>
</div>
 <div class="container">
   <div class="row">
     <table class="table table-bordered table-hover">
       <thead>
         <tr>
           <th scope="col">Lesson No.</th>
           <th scope="col">Lesson Name</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">
            1
           </th>
           <td>
             Introduction
           </td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>
</div>
<!..end course details main content..!>

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