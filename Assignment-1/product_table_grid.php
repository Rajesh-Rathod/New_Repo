<?php
include "customer_header.php";

if (!isset($_SESSION['name1'])) {
    header("location:home.php");
}

 else {
    
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

        <style>
            
            h4  {
                color:blue;
            }
        </style>


        </head>
	<body>
            <div class="container">
                <div class="jumbotron">
                    <center> <h2> <label class="label label-primary"> Available  Product </label> </h2> </center>
                    <br/>
                    <center>           
                    <?php
                    //if (isset($_post['btn3'])) {            
			$conn = mysql_connect("localhost","root","");
			if(!$conn)
			{
				die("can not connect:" . mysql_error());
			}

			mysql_select_db("Inventory_Data",$conn);
			$sql="select id,sku,name,price,qty,desc1,state_of_selling,p_status,inventory,pics from product ";
			$result=mysql_query($sql,$conn);
			?>
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%" >                            
			             <tr align="center" style="background-color:white">
                            
                            <th><h4>Product Description</h4></th>			
                            <th><h4>Product Image</h4></th>
                            
			             </tr>
            <?php
			while ($record = mysql_fetch_array($result))
			{
                ?>
                <tr>
                    
				    <td bgcolor="white">
                            Product Sku        :<?php echo " " . $record['sku'] ; ?> <br />
                            Product Name       :<?php echo " " . $record['name'] ;?> <br />
                            Product Price      :<?php echo " " . $record['price'] ; ?> <br />
                            Product Quantity   :<?php echo " " . $record['qty'] ; ?> <br /> 
                            Product Description:<?php echo " " . $record['desc1'] ;?> <br />
                            State of selling   :<?php echo " " . $record['state_of_selling'] ;?> <br />
                            Product Status     :<?php echo " " . $record['p_status'] ; ?> <br />
                            Inventory Details  :<?php echo " " . $record['inventory'] ; ?>
                        </label>
                    </td> 
            
                    <td bgcolor="black">
                        <a href="" ><img src="<?php echo " " . $record['pics'] ; ?>" style="width:304px;height:228px"> </a>
                      <!--  Product Image  :<?php echo " " . $record['pics'] ; ?> -->
                    </td>
                </tr>
                                    
		<?php	} ?>

			</table>
			<?php mysql_close($conn);  ?>                   

	
                        </table>
                               </div>
                        </center>
                    </div>
                </div>
	</body>
</html>	
<?php } ?>		