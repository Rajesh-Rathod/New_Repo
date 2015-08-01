<?php
session_start();
if (!isset($_SESSION['name'])) {
	//echo "part1"; exit();
	header ("location:index.php");
	exit();

}
else
{
	//echo "part2"; exit();
	session_unset();
	session_destroy();
	header("location:index.php");
	exit();
}
 
?>
