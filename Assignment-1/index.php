<!DOCTYPE html>
<?php
include "header.php";
?>
<html>
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>        
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"/>
        <script type ="text/javascript" src="jquery.js"></script>        
    </head>
    <body>
        <form class="form-signin" action="Inv_Login.php" method="post">
      
        <div class="panel panel-primary"></div>
        <div class="container">
           
                
                    
            <center>
            <div class="jumbotron"> <center> <h2> <label class="label label-warning"> Admin Login </label> </h2> </center> </br>
            <div class="input-group input-group-lg">
                
            
             <input type="text" name="userid" class="form-control" placeholder="Username">
            </div> <br/>
            <div class="input-group input-group-lg">
              
                <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
            <div>
                <input type="submit" class="btn btn-default navbar-btn" value="Sign In" name="btn">                
            </div>           
            </div>
            </center>
       
        </div>
         </form>
    </body>
</html>

