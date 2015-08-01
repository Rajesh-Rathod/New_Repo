<?php
include "header.php";
require_once 'config.php';

if (!isset($_SESSION['name'])) {

    header("location:admin.php");
} else {


    if (isset($_POST["btn1"])) {

        $fname = $_POST['fname'];

        $lname = $_POST['lname'];
        $username = $_POST['uname'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gen'];
        $state = $_POST['state'];
        $District = $_POST['dist'];
        $addr = $_POST['addr'];

        //$sql1="INSERT INTO `ctr_Reg`(`id`, `fname`, `lname`, `username`, `pass`, `repass`, `email`, `phone`, `gender`, `state`, `District`, `addr`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])";

        $sql = "INSERT INTO ctr_Reg (fname,lname,username,pass,repass,email,phone,gender,state,District,addr)
           VALUES ('$fname','$lname','$username','$pass','$repass','$email','$phone','$gender','$state','$District','$addr')";
        
        
        $result = mysql_query($sql);
        if ($result) {
            header("location:customer_grid.php");
        } else {
            echo "data not insert";
        }
    }
}
?>

