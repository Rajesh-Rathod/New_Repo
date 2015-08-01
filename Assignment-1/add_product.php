<?php
require_once 'config.php';
session_start(); 
if (!isset($_SESSION['name'])) {
    header("location:index.php");
    
}
 else {
    

if (isset($_POST['btn2'])) {
    
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $desc1 = $_POST['desc1'];
    $state_of_selling = $_POST['state'];    
    $status = $_POST['status'];
    $inventory = $_POST['inv'];
    
    $pics = $_POST['file']['name'];
    //$image = $_POST['image'];
    
        
        $path="image/";
	$path1=  $path.basename( $_FILES["file"]["name"]);
	$uploaddone=1;
	
	if(move_uploaded_file($_FILES["file"]["tmp_name"],$path1))
	{
	
		echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
	}
	elseif(file_exists($path1))
	{
		echo "sorry already file exists";
		$uploaddone=0;
	}	
	else
	{
		echo " sorry ,there was error on file uploading";
	}

    
  $sql = "INSERT INTO product (sku,name, price, qty, desc1, state_of_selling, p_status, inventory,pics)"
            . "VALUES ('$sku','$name','$price','$qty','$desc1','$state_of_selling','$status','$inventory','$path1')";         //   exit()     ;
    
    $result = mysql_query($sql);
    
    if ($result == 1) {
        header("location:admin.php");
        
    }
}

 }
 
 ?>