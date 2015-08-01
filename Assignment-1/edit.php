<?php
include 'header.php';
require_once 'config.php';

if (isset($_POST['btn1'])) {
    
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['uname'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        //$gender = $_POST['gen'];
        $state = $_POST['state'];
        $District = $_POST['dist'];
        $addr = $_POST['addr'];
                            
                            
   $query = "UPDATE ctr_Reg SET fname = '$fname',lname='$lname',username ='$username',pass='$pass',repass='$repass',email='$email',"
            . "phone='$phone',state='$state',District='$District',addr='$addr' where id='$id'"; 
    $result = mysql_query($query);
    
    if ($result) {
       header("location:customer_grid.php"); 
    }
    
 else {
        header("location:customer_grid.php");
    }
    
    
            
}
 



?>