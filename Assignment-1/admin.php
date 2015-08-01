<!DOCTYPE html>
<?php
include "header.php";

?>

<?php
//session_start();
if (!isset($_SESSION['name'])) {
    header("location:index.php");
}
else{



?>
<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type ="text/javascript" src="jquery.js"></script>          
        <script type ="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>  
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>     
        <SCRIPT TYPE="text/javascript">
jQuery(function(){
        jQuery("#submit").click(function(){
       jQuery(".error").hide();
        var hasError = false;
        var passwordVal = $("#password").val();
        var passwordVal1 = $("#password").val().length;
        var checkVal = $("#password-check").val();
        if (passwordVal == '' || passwordVal1 < 6) {
            jQuery("#password").after('<span class="error">Please enter a password.</span>');
            hasError = true;
        } else if (checkVal == '') {
            jQuery("#password-check").after('<span class="error">Please re-enter your password or password atleast minimum 6 character.</span>');
            hasError = true;
        } else if (passwordVal != checkVal ) {
            jQuery("#password-check").after('<span class="error">Passwords do not match or password atleast minimum 6 character.</span>');
            hasError = true;
        }
        if(hasError == true) {return false;}
    });
});


</SCRIPT>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery(".my-accordian").hide();

                jQuery("#ihd").click(function() {
                    jQuery("#addp").slideToggle("slow");
                    jQuery(this).toggleClass("active");
                })

                jQuery("#ihd2").click(function() {
                    jQuery("#grid").slideToggle("slow");
                    jQuery(this).toggleClass("active");
                });

                jQuery("#ihd3").click(function() {
                    jQuery("#customer").slideToggle("slow");
                    jQuery(this).toggleClass("active");
                });
            });
            onClick = "Submit()";

            jQuery(function() {
                jQuery(":file").change(function() {
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();
                        reader.onload = imageIsLoaded;
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            });

            function imageIsLoaded(e) {
                jQuery('#myImg').attr('src', e.target.result);
            }
            ;
        </script>
       
    </head>
    <body>

        <div class="container">
            <div class="jumbotron">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <a href="logout.php" class="btn btn-sm btn-success"> Logout </a>
                    <a href="change_password.php" class="btn btn-sm btn-success"> Change Password </a>
                </div>


                <center> <h1> <label class="label label-warning">Admin</label> </h1> </center>
                <h2 id="ihd"> <span class="label label-success"> ADD PRODUCT </span> </h2>
                <div class="panel panel-default my-accordian" id = "addp">
                    <div class="panel-heading">Add Product</div>
                    <div class="panel-body">
                        <form action="add_product.php" method="post" enctype="multipart/form-data">

                            <div class="container">
                                <div class="jumbotron">                                       
                                    <div class="input-group">

                                        <input type="text" class="form-control" name="sku">
                                        <span class="input-group-addon"> Product Id (SKU) </span>
                                    </div> <br/>

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name">
                                        <span class="input-group-addon"> Product Name </span>
                                    </div><br/>
                                    
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="price">
                                        <span class="input-group-addon"> Product Price</span>
                                    </div><br/>

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="qty">
                                        <span class="input-group-addon"> Product Quantity </span>
                                    </div></br>  

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="desc1">
                                        <span class="input-group-addon"> Product Description </span>
                                    </div></br>  

                                    <div class="col-md-4">
                                        <center>
                                            <h4> State : </h4>
                                            <select name="state">
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
                                                <option value="Enable">Enable</option>
                                                <option value="Disable">Disable</option>

                                            </select>
                                        </center>
                                    </div>                              
                                    <div class="col-md-4">
                                        <center>                              
                                            <h4> Stock Availability : </h4>
                                            <select name="inv">                                     
                                                <option value="Instock">Instock</option>
                                                <option value="Outstock">Outstock</option>                            
                                            </select>
                                            
                                        </center>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <center>                                     
                                            <input type="file" name="file" id="file">
                                        </center>
                                    </div>                        

                                    <div>
                                        <center>
                                            <input type="submit" value="Save" name="btn2">
                                        </center>
                                    </div> <br/><br/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <h2 id="ihd2"> <span class="label label-success"> MANAGE PRODUCT and CUSTOMER </span> </h2>
                <div class="panel panel-default my-accordian" id = "grid">
                    <div class="panel-heading"><a href="product_grid.php" class="btn btn-lg btn-primary"> Manage Product </a></div>
                    <div class="panel-body"> <a href="customer_grid.php" class="btn btn-lg btn-primary">Manage Customer</a>            

                    </div>  
                </div>

                <h2 id="ihd3"> <span class="label label-success"> ADD CUSTOMER </span> </h2>
                <div class="panel panel-default my-accordian" id = "customer">
                    <div class="panel-heading">Customer</div>
                    <div class="panel-body">

                        <div class="container">
                            <div class="jumbotron">
                                <h2 align="center">Customer Registration Form</h2> 


                                <div class="panel panel-default">
                                    <div class="panel-heading"> Customer Registration </div>
                                    <div class="panel-body">
                                        <select name="rr">
                                            <option value="MR >">MR.</option>
                                            <option value="MISS >">MISS.</option>
                                            <option value="MRS >">MRS.</option>
                                        </select>

                                        <form class="form-horizontal" action="add_customer.php" method="post">

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
            </div>
        </div>
    </body>
</html>

<?php } ?>