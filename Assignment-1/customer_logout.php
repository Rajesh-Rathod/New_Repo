<?php
session_start();
if (!isset($_SESSION['name1'])) {
	//echo "part1"; exit();
	header ("location:home.php");
	exit();

}
else
{
	//echo "part2"; exit();
	session_unset();
	session_destroy();
	header("location:home.php");
	exit();
}
 
?>
