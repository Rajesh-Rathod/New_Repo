<?php
include "header.php";
require_once 'config.php';

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
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery('#example').dataTable();
                });



            </script>
        </head>
        <body>
            <div class="container">
                <div class="jumbotron">
                    <form action="massdelete.php" method="post">
                        <center> <h2> <label class="label label-warning"> Manage Customer </label> </h2> </center>

                        <div class="col-md-8">
                            <a href="admin.php">  <button type="button" class="btn btn-info">Home</button>    </a>
                        </div>
                        <div class="col-md-4"><samp> For Delete Record </samp><input type="submit" class="btn btn-info" name="delete" id="delete" value="delete"/></div>



                        <br/>
                        <br/>

                        <center>           
                            <?php
                            $conn = mysql_connect("localhost", "root", "");
                            if (!$conn) {
                                die("can not connect:" . mysql_error());
                            }

                            mysql_select_db("Inventory_Data", $conn);
                            $sql = "select id,fname,lname,username,state,phone,gender from ctr_Reg ";
                            $result = mysql_query($sql, $conn);

                            // $sql1 = "SELECT DISTINCT gender FROM from ctr_Reg"
                            ?>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" cellspacing="0" width="100%">	
                                    <thead>
                                        <tr>
                                            <th onclick="sortData('id')" style="cursor: pointer">ID<sup>s</sup></th> 
                                            <th onclick="sortData('fname')" style="cursor: pointer">First_Name</th>			
                                            <th onclick="sortData('lname')" style="cursor: pointer">Last_Name</th>
                                            <th onclick="sortData('username')" style="cursor: pointer">Username</th>
                                            <th onclick="sortData('state')" style="cursor: pointer">State</th>
                                            <th onclick="sortData('phone')" style="cursor: pointer">Contact_No</th>
                                            <th onclick="sortData('gender')" style="cursor: pointer">Gender</th>
                                            <th>Update</th>  
                                            <th>Select</th>
                                        </tr>
                                    </thead>

                                    <?php while ($record = mysql_fetch_array($result)) { ?>
                                        <tr>
                                            <td> <?php echo $record['id']; ?> </td>
                                            <td> <?php echo $record['fname']; ?> </td>
                                            <td> <?php echo $record['lname']; ?> </td>
                                            <td> <?php echo $record['username']; ?> </td>
                                            <td> <?php echo $record['state']; ?> </td>
                                            <td> <?php echo $record['phone']; ?> </td>
                                            <td> <select name='gender' class="gender" onchange="updateGender(<?php echo $record['id']; ?>, this.value)">
                                                    <option value="">Select</option>
                                                    <option value="Male" <?php
                                                    if ($record['gender'] === 'Male') {
                                                        echo 'selected';
                                                    }
                                                    ?>>Male</option>
                                                    <option value="Female" <?php
                                                    if ($record['gender'] === 'Female') {
                                                        echo 'selected';
                                                    }
                                                    ?>>Female</option>
                                                    <option value="Other" <?php
                                                    if ($record['gender'] === 'Other') {
                                                        echo 'selected';
                                                    }
                                                    ?>>Other</option>                      



                                                </select>  </td>
                                       <!--     <td>  <a href="update.php" <?php $uid = $record['id']; ?>><input type="submit" value="Select"></a> </td>  -->

                                            <td> <a href='update.php?id=<?php echo $record['id']; ?>'><input type="button" value="Edit"/></a>  </td>

                                            <td> <input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $record['id']; ?>" /></td>
                                        </tr>
                            <?php } ?>




                                </table>
                            </div>
    <?php mysql_close($conn); ?>      

                        </center>
                    </form>
                </div>
            </div>
        </body>
    </html>	

<?php } ?>




