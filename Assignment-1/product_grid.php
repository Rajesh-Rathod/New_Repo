<?php
include "header.php";
if (!isset($_SESSION['name'])) {
    header("location:index.php");
} else {
    ?>



    <html>
        <head> 
            <title>Admin</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width">
            <script type ="text/javascript" src="jquery-1.11.1.min.js"></script>          
            <script type ="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>  
            <script type ="text/javascript" src="dataTables.bootstrap.js"></script>  
            <script type ="text/javascript" src="jquery.dataTables.min.js"></script> 
            <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>      
        </head>
        <body>
            <div class="container">
                <div class="jumbotron">
                    <form action="p_massdelete.php" method="post">
                        <center> <h2> <label class="label label-warning"> Manage Product </label> </h2> </center>

                        <div class="col-md-8">
                            <a href="admin.php">  <button type="button" class="btn btn-info">Home</button>    </a>
                        </div>
                        <div class="col-md-4"><samp> For Delete Record </samp>
                            <input type="submit" class="btn btn-info" value="Delete"></div>


                        <br/>
                        <br/>
                        <center>           
                            <?php
                            //if (isset($_post['btn3'])) {            
                            $conn = mysql_connect("localhost", "root", "");
                            if (!$conn) {
                                die("can not connect:" . mysql_error());
                            }

                            mysql_select_db("Inventory_Data", $conn);
                            $sql = "select id,sku,name,price,qty,state_of_selling,p_status,inventory from product ";
                            $result = mysql_query($sql, $conn);
                            ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" cellspacing="0" width="100%">                            
                                    <tr>
                                        <th>Product_ID</th>
                                        <th>Product_SKU</th>			
                                        <th>Product_Name</th>
                                        <th>Product_Price</th>
                                        <th>Product_Quantity</th>
                                        <th>State_of_selling</th>
                                        <th>Inventory</th>
                                        <th>Status</th>
                                        <th>Update</th>                            
                                        <th>Select</th>
                                    </tr><?php
                                    while ($record = mysql_fetch_array($result)) {
                                        ?>
                                        <tr>

                                            <td> <?php echo $record['id']; ?>  </td> 
                                            <td>  <?php echo $record['sku']; ?> </td> 				
                                            <td>  <?php echo $record['name']; ?>  </td> 
                                            <td>  <?php echo $record['price']; ?>  </td> 
                                            <td>  <?php echo $record['qty']; ?>  </td> 
                                            <td>  <?php echo $record['state_of_selling']; ?>  </td> 
                                            <td> <select> 
                                                    <option id="<?php echo $record['inventory']; ?>" value="instock">Instock</option>
                                                    <option id="<?php echo $record['inventory']; ?>" value="Outstock">OutStock</option>
                                                </select>   </td> 

                                            <td> <select> 
                                                    <option id="<?php echo $record['p_status']; ?>" value="enable">Enable</option>
                                                    <option id="<?php echo $record['p_status']; ?>" value="disable">Disable</option>
                                                </select>   </td> 


                                            <td> <a href='p_update.php?id=<?php echo $record['id']; ?>'><input type="button" value="Edit"/></a>  </td>
                                            <td> <input type="checkbox" name="checkbox[]" value="<?php echo $record['id']; ?>" id="checkbox[]"> </td>

                                        <tr/>

                                        <tr/> 
                                    <?php } ?>
                                </table>
                                <?php mysql_close($conn); ?>                   


                                </table>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </body>
    </html>	

<?php } ?>