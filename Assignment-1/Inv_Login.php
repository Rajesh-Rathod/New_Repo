<?php
require_once "config.php";
session_start();
if(isset($_POST["btn"]))
{
$user = $_POST['userid'];
$password = $_POST['pass'];
$user = stripslashes($user);
$password = stripslashes($password);
$user = mysql_real_escape_string($user);
$password = mysql_real_escape_string($password);

$sql="SELECT 'username' FROM Inv_login WHERE username= '$user' and password= '$password'";
$result=mysql_query($sql) or die("mysql  error :: " . mysql_error()); 
//$count=mysqli_num_rows($result);
$num_rows = mysql_num_rows($result);

if($num_rows == 1)
{

    $_SESSION['name'] = $user;

    header("location:admin.php");
}
else
{
    echo "username or password invalid";
}
    
}

?>
