<?php

if(!isset($_SESSION)){
    session_start();
}


include('../dbconnection.php');

if(!isset($_SESSION['admin_Is_Login']))
{
    if(isset($_POST['adminLogemail']) && isset($_POST['adminLogpass']))
    {
        $adminLogemail = $_POST['adminLogemail'];
        $adminLogpass = $_POST['adminLogpass'];
        $sql = "SELECT * FROM `admin` WHERE admin_email = '".$adminLogemail."' AND admin_pass ='".$adminLogpass."'"; 
        $result = $conn->query($sql);
        $row = $result->num_rows;
        if($row === 1){
            $_SESSION['admin_Is_Login'] = true;
            $_SESSION['adminLogemail'] = $adminLogemail;
            echo json_encode("ok");
        }
        else if($row === 0)
        {
            echo json_encode("no");
        }
    }
}


?>