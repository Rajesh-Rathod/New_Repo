<?php 
include "header.php";
require_once 'config.php';
$delete = $_POST['checkbox'];
foreach ($delete as $id) {
    
$query="DELETE FROM ctr_Reg WHERE id = '".$id."'";
$result= mysql_query($query) or die("Invalid query");

}
//Show that the items have been successfully removed.//
if ($result) {
    header("location:customer_grid.php");
    
}
 else {
    echo "does not delete"    ;
}
?>