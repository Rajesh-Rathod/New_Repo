<?php
include 'header.php';
require_once 'config.php';

if (isset($_POST['btn1'])) {
    
        $id = $_POST['id'];
        $sku = $_POST['sku'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $desc1 = $_POST['desc1'];
        $state_of_selling = $_POST['state'];
        $p_status = $_POST['status'];
        $inventory = $_POST['inv'];
        
       
                            
                            
 $query = "UPDATE product SET sku = '$sku',name='$name',price ='$price',qty='$qty',desc1='$desc1',state_of_selling='$state_of_selling',"
            . "p_status='$p_status',inventory='$inventory' where id='$id'";
    $result = mysql_query($query);
    
    if ($result) {
       header("location:product_grid.php"); 
    }
    
 else {
        header("location:product_grid.php");
    }
    
    
            
}
 



?>