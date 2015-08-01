<?php

    

$con=  mysql_connect("localhost","root","");
if(!$con)
{
    echo "not connected";
}
$db = mysql_select_db("inventory_Data",$con);
if (!$db) {
    echo 'select database failed';
    
}

?>

