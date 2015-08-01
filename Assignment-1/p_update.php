<?php
include 'header.php';
require_once 'config.php';
$uid1 = $_GET['id'];

$query = "select * from product where id = '$uid1'";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result)) {

                            $sku = $row['sku'];
                            $pname = $row['name'];
                            $price = $row['price'];
                            $qty = $row['qty'];
                            $desc1 = $row['desc1'];
                            $state_of_selling = $row['state_of_selling'];
                            $p_status = $row['p_status'];
                            $inventory = $row['inventory'];
                            
}
?>

<html>
    <head>
        <title>update product</title>
    </head>
    <body>

        <div class="panel panel-default my-accordian" id = "addp">
            <center><h3><div class="panel-heading"> Update Product </div></h3></center> </div>
            <div class="panel-body">
                <form action="p_edit.php" method="post">

                    <div class="container">
                        <div class="jumbotron">                                       
                            <div class="input-group">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $uid1 ;?>">
                                <input type="text" class="form-control" name="sku" value="<?php echo $sku ;?>">
                                <span class="input-group-addon"> Product Id (SKU) </span>
                            </div> <br/>

                            <div class="input-group">
                                <input type="text" class="form-control" name="name" value="<?php echo $pname ;?>">
                                <span class="input-group-addon"> Product Name </span>
                            </div><br/>

                            <div class="input-group">
                                <input type="text" class="form-control" name="price" value="<?php echo $price ;?>">
                                <span class="input-group-addon"> Product Price</span>
                            </div><br/>

                            <div class="input-group">
                                <input type="text" class="form-control" name="qty" value="<?php echo $qty ;?>">
                                <span class="input-group-addon"> Product Quantity </span>
                            </div></br>  

                            <div class="input-group">
                                <input type="text" class="form-control" name="desc1" value="<?php echo $desc1 ;?>">
                                <span class="input-group-addon"> Product Description </span>
                            </div></br>  

                            <div class="col-md-4">
                                <center>
                                    <h4> State : </h4>
                                    <select name="state">
                                        <option value="<?php echo $state_of_selling ;?> selected"><?php echo $state_of_selling ;?></option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Panjab">Panjab</option>
                                        <option value="Benglore">Benglore</option>
                                    </select>
                                </center>
                            </div>

                            <div class="col-md-4">
                                <center>
                                    <h4> status : </h4>
                                    <select name="status">
                                        <option value="<?php echo $p_status ;?> selected"><?php echo $p_status ;?></option>
                                        <option value="Enable">Enable</option>
                                        <option value="Disable">Disable</option>

                                    </select>
                                </center>
                            </div>                              
                            <div class="col-md-4">
                                <center>                              
                                    <h4> Stock Availability : </h4>
                                    <select name="inv">  
                                        <option value="<?php echo $inventory ;?> selected"><?php echo $inventory ;?></option>
                                        <option value="Instock">Instock</option>
                                        <option value="Outstock">Outstock</option>                            
                                    </select>
                                </center>
                            </div>

                            <div class="col-lg-4">
                                <center>                                     
                                    <input type='file' />
                                    <img id="myImg" src="#"  alt="your image" />
                                </center>
                            </div>                        

                            <div>
                                <center>
                                    <input type="submit" value="Save" name="btn1" id="submit">
                                </center>
                            </div> <br/><br/>
                        </div>
                    </div>
                </form>
            </div>
            
    </body>

</html>
