<?php
    include "header.php";
    include "config.php";
    $user=$_SESSION['name'];

        if($_POST['newp']!=$_POST['conp'])
        {
                echo "Password is not match!!!"; 
               
        }  
        else 
        {
            $oldp = $_POST['oldp']; 
            $conp = $_POST['conp'];    
            $newp = $_POST['newp'];
  
            $query = "select pass from ctr_Reg where username = '$user'";
            $result = mysql_fetch_array(mysql_query($query));
               
            if($result['pass'] == $_POST['oldp'])
            {
                $updateQuery = "update ctr_Reg SET pass = '$newp' where username = '$user'";
                if(mysql_query($updateQuery))
                {
                    //echo "Your Password Has Been Changed SUccessfully!" ;
                    header("location:admin.php");
                }
            }
            else
            {
                echo "Sory You Have Entered wrong Password...!";
                header("location:change_password.php");
            }
        }

?>