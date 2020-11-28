$(document).ready(function(){
    //Ajax call form already exist email verification
    var regEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i;
    $("#stuemail").on("keypress blur",function () {
     var stuemail = $("#stuemail").val();
     $.ajax({
         url: 'Student/addstudent.php',
         method: "POST",
         data:{
             checkemail:"checking",
             stuemail:stuemail,
         },
         success:function(data){
            //  console.log(data);
            if(data != 0)
            {
                $("#statusMsg2").html('<small style="color:red">Email ID Already Used !!!</small>');
                // $("#stuemail").focus();
                $("#signup").attr("disabled",true);
            }
            else if (data == 0 && regEx.test(stuemail))
            {
                $("#statusMsg2").html('<small style="color:green"> Awesome, there you go !!!</small>');
                $("#signup").attr("disabled",false);
            }
            else if(!regEx.test(stuemail))
            {
                $("#statusMsg2").html('<small style="color:red">Please Enter Valid Email.</small>');
                // $("#stuemail").focus();
                $("#signup").attr("disabled",true); 
            }
         },
     });
    });
});


//checking and validation
function addStu(){
 var stuname = $("#stuname").val();   
 var stuemail = $("#stuemail").val();  
 var stupass = $("#stupass").val();  
 var regEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i;

 // start field checking and validation
 if(stuname.trim() == "")
 {
   $("#statusMsg1").html('<small style="color:red">Please Enter name</small>');
   $("#stuname").focus();
   return false;
 }
 else if(stuemail.trim() == "")
 {
   $("#statusMsg2").html('<small style="color:red">Please Enter Email</small>');
   $("#stuemail").focus();
   return false;
 }
 else if(stuemail.trim() !== "" && !regEx.test(stuemail) )
 {
    $("#statusMsg2").html('<small style="color:red">Please Enter Valid Email</small>');
    $("#stuemail").focus();
    return false;
 }
 else if(stupass.trim() == "")
 {
   $("#statusMsg3").html('<small style="color:red">Please Enter Password </small>');
   $("#stupass").focus();
   return false;
 }  // end field checking and validation
 else{
        $.ajax({
            url:'student/addstudent.php',
            method:'POST',
            dataType: "json",
            data:{
                stusignup:"studignup",
                stuname:stuname,
                stuemail:stuemail,
                stupass:stupass
            },
            success: function(data){
                console.log(data);
            if(data == "ok")
            {
                $("#successMsg").html("<span class='alert alert-success'>Registration Successful !!!</span>");
                clearStuRegField();
            }
            else if(data == "failed")
            {
                $("#successMsg").html("<span class='alert alert-danger'>Registration Failed !!!</span>");
            }
            },
        });
     }
 };


 //student login

 function studentLogIn()
 {
     var stuLogemail = $("#stuLogemail").val();
     var stuLogpass = $("#stuLogpass").val();
    
     $.ajax({
       url: 'student/addstudent.php',
       method:'POST',
       dataType: "json",

       data: {
        stuLogin:"stuLogin",
        stuLogemail:stuLogemail,
        stuLogpass:stuLogpass,
       },

       success: function(data){
        // console.log(data);
           if (data == 0)
           {
               $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email Or Password !!!</small>');
           }
           else if (data == 1)
           {
            $("#statusLogMsg").html('<small class="alert alert-success">Login success!!!</small>');
            setTimeout(()=>{
                window.location.href = "index.php";
            },500);
           }
       }
     });
     
 }

 //admin login
 function loginAdmin(){
 var adminLogemail = $("#adminLogemail").val();
 var adminLogpass = $("#adminLogpass").val();
// console.log(adminLogpass);
// console.log(adminLogemail);

    $.ajax({
        url:'admin/loginAdmin.php',
        method:'POST',
        dataType:'JSON',
        data:{
            adminLogemail : adminLogemail,
            adminLogpass : adminLogpass,
        },
        
        success: function(data)
        {
            // console.log("working");
            if(data == "ok")
            {
            $("#adminLoginStatus").html("<small class='alert alert-success'>Log in success!!!</small>");
            window.location.href = "admin/adminDashboard.php";
            // console.log("Go to admin page");
            }
            else if (data == "no")
            {
            $("#adminLoginStatus").html("<small class='alert alert-danger'>Incorrect Email ID or Password!!!</small>");
            // console.log("Show error");
            }
        }
    });

 }
 


 //Empty all fields
 function clearStuRegField()
 {
     $("#StuRegForm").trigger("reset");
     $("#statusMsg1").html(" ");
     $("#statusMsg2").html(" ");
     $("#statusMsg3").html(" ");
 }


// course details dynamic
 


//Remove courses dynamically

// function remove_course()
// {
// var course_id = $("#course_id").val();
// console.log(course_id);
// }