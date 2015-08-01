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

      
                
                
                <center> <h2 id="ihd3"> <span class="label label-success"> NEW CUSTOMER </span> </h2> </center>
                <div class="panel panel-default my-accordian" id = "customer">
                  
                    <div class="panel-body">

                        <div class="container">
                            <div class="jumbotron">
                                <h2 align="center"> New Customer Registration </h2> 


                                <div class="panel panel-default">
                                    <div class="panel-heading"> Customer Registration Form </div>
                                    <div class="panel-body">
                                        <select name="rr">
                                            <option value="MR >">MR.</option>
                                            <option value="MISS >">MISS.</option>
                                            <option value="MRS >">MRS.</option>
                                        </select>

                                        <form class="form-horizontal" action="newcustomer.php" method="post">

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">First name</span>
                                                    <input type="text" class="form-control" id="fname" name="fname">
                                                </div><br>

                                                <div class="input-group">
                                                    <span class="input-group-addon">Last name</span>
                                                    <input type="text" class="form-control" id="lname" name="lname">
                                                </div><br>                                     

                                                <div class="input-group">
                                                    <span class="input-group-addon">User name</span>
                                                    <input type="text" class="form-control" id="user_name" name="uname">
                                                </div><br>

                                                <div class="input-group">
                                                    <span class="input-group-addon">Password</span> 
                                                    <input type="password" class="form-control" id="password" name="pass" >
                                                </div><br>

                                                <div class="input-group">
                                                    <span class="input-group-addon">Re-Enter-Password</span> 
                                                    <input type="password" class="form-control" id="password-check" name="repass" >
                                                </div><br>                                                               


                                                <div class="input-group">
                                                    <span class="input-group-addon">Address</span> 
                                                    <input type="text" class="form-control" id="address" name="addr">
                                                </div><br>

                                                <div class="input-group">
                                                    <span class="input-group-addon">Email</span> 
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div><br>

                                                <div class="input-group">
                                                    <span class="input-group-addon">Phone no</span> 
                                                    <input type="text" class="form-control" id="phno" name="phone">
                                                </div><br>

                                                <div class="col-md-4">
                                                    <center>
                                                        <h4> Gender : </h4>
                                                        <select name="gen">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </center>
                                                </div>

                                                <div class="col-md-4">
                                                    <center>
                                                        <h4> State : </h4>
                                                        <select name="state">
                                                            <option value='Gujarat'>Gujarat</option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Panjab">Panjab</option>
                                                            <option value="Banglore">Banglore</option>
                                                        </select>
                                                    </center>
                                                </div>

                                                <div class="col-md-4">
                                                    <center>
                                                        <h4> City : </h4>
                                                        <select name="dist">
                                                            <option value='ahm'>Ahmedabad</option>
                                                            <option value="bar">Baroda</option>
                                                            <option value="sur">Surat</option>
                                                            <option value="bha">Bhavnagar</option>
                                                        </select>
                                                    </center>
                                                </div>   <br/><br/>      
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <input type="submit" value="SAVE" name="btn1" id="submit" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                
           
       
    </body>
</html>
