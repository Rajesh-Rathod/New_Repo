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

echo $password ; die();

$sql="SELECT 'username' FROM ctr_Reg WHERE username= '$user' and pass= '4'or'1+1=2''";

//4''or'1+1=2'


$ersult=mysql_query($sql) or die("mysql  error :: " . mysql_error()); 
//$count=mysqli_num_rows($result);
$num_rows = mysql_num_rows($result);

if($num_rows == 1)
{

    $_SESSION['name1'] = $user;
       
    header("location:product_table_grid.php");
}
else
{
    echo "username or password invalid";    
}
    
}

?>

