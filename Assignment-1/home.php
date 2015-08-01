<?php
include "customer_header.php";
?>

<html>
    <head>
        <title>Home</title>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>        
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"/>
        <script type ="text/javascript" src="jquery.js"></script> 
    </head>
    <body>
        <form action="customer_login.php" method="post">
            <div class="container">
                <div class="jumbotron">
                    <div> <center> <h2><label class="lable label-danger">!!!---  Welcome  ---!!!</label></h2> </center> </div>
                    <div>
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <center><h3>Customer Login</h3></center> 
                            </div>
                            <div class="panel-footer">
                                <center>
                                    <div class="input-group input-group-lg">


                                        <input type="text" name="userid" class="form-control" placeholder="Username">
                                    </div> <br/>
                                    <div class="input-group input-group-lg">

                                        <input type="password" name="pass" class="form-control" placeholder="Password">
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn-default navbar-btn" value="Sign In" name="btn">                
                                    </div> 
                                    <a href="customer_register.php"> For New Customer sign up here... </a>
                                </center>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
