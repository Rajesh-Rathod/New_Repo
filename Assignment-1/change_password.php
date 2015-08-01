<!DOCTYPE html>

<?php
include "header.php";
?>


        <html>
            <head>
                <title>Change Password</title>
                
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width">
                <script type ="text/javascript" src="jquery.js"></script>          
                <script type ="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>  
                <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>        
            </head>
            <body>
                <form action="change_demo.php"  method="post">
              
                <div class="panel panel-primary"></div>
                <div class="container">
                    <center>
                    <div class="jumbotron"> <center> <h2> <label class="label label-warning"> Change Password </label> </h2> </center> </br>
                    <div class="input-group input-group-lg">
                            
                    
                      <input type="password" name="oldp" id="oldp" class="form-control" placeholder="Old Password">
                    </div> </br>

                    <div class="input-group input-group-lg">
                      
                        <input type="password" name="newp" class="form-control" placeholder="New Password">
                    </div><br/>

                    <div class="input-group input-group-lg">
                      
                        <input type="password" name="conp" class="form-control" placeholder="Confirm Password">
                    </div><br/>

                    <div>
                        <input type="submit" id="change" class="btn btn-default navbar-btn" value="Submit" name="btn">                
                    </div>           
                    </div>
                    </center>
                </div>
                 </form>

            </body>
        </html>
        
?>