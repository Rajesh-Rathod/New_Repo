
<?php
include 'header.php';
require_once 'config.php';
 $uid = $_GET['id'];
 
 $query = "select * from ctr_Reg where id = '$uid'";
 $result = mysql_query($query);
 
 while ($row = mysql_fetch_array($result)){
                            
                            $name = $row['fname']; 
                            $last = $row['lname']; 
                            $usern = $row['username']; 
                            $password = $row['pass']; 
                            $reenter = $row['repass']; 
                            $mail = $row['email']; 
                            $phone = $row['phone'];
                            $gen = $row['gender'];
                            $state = $row['state']; 
                            $dist = $row['District'];
                            $address = $row['addr'];     
     
 } 
 

/*if (!isset($_SESSION['name'])) {
    header("location:index.php");
} else {
    
}*/
?>

<html>
    <head>
        <title>Update Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type ="text/javascript" src="jquery.js"></script>          
        <script type ="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>  
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>   
    </head>
    <body>

        <div class="container">
            <div class="jumbotron">
                <center><h2>Update Customer Form</h2></center><br/>
                <form class="form-horizontal" action="edit.php" method="post">
                    <input type="hidden" class="form-control" id="fname" name="id" value="<?php echo $uid; ?>">
                    <div class="form-group">
                        <div class="input-group">
                            
                            <span class="input-group-addon">First name</span>
                            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $name; ?>">
                        </div><br>

                        <div class="input-group">
                            <span class="input-group-addon">Last name</span>
                            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $last; ?>">
                        </div><br>                                     

                        <div class="input-group">
                            <span class="input-group-addon">User name</span>
                            <input type="text" class="form-control" id="user_name" name="uname" value="<?php echo $usern; ?>">
                        </div><br>

                        <div class="input-group">
                            <span class="input-group-addon">Password</span> 
                            <input type="password" class="form-control" id="password" name="pass" value="<?php echo $password; ?>">
                        </div><br>

                        <div class="input-group">
                            <span class="input-group-addon">Re-Enter-Password</span> 
                            <input type="password" class="form-control" id="password-check" name="repass" value="<?php echo $reenter; ?>" >
                        </div><br>                                                               


                        <div class="input-group">
                            <span class="input-group-addon">Address</span> 
                            <input type="text" class="form-control" id="address" name="addr" value="<?php echo $address; ?>">
                        </div><br>

                        <div class="input-group">
                            <span class="input-group-addon">Email</span> 
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $mail; ?>">
                        </div><br>

                        <div class="input-group">
                            <span class="input-group-addon">Phone no</span> 
                            <input type="text" class="form-control" id="phno" name="phone" value="<?php echo $phone; ?>">
                        </div><br>

                        <!-- <div class="col-md-4">
                            <center>
                                <h4> Gender : </h4>
                                <select name="gen">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </center>
                        </div> -->

                        <div class="col-md-4">
                            <center>
                                <h4> State : </h4>
                                <select name="state">
                                    <option value="<?php echo $state; ?>" selected ><?php echo $state; ?></option>
                                    <option value="Gujarat">Gujarat</option>
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
                                    <option value="<?php echo $dist; ?>"><?php echo $dist; ?></option>
                                    <option value="Baroda">Baroda</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Bhavnagar">Bhavnagar</option>
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

    </body>

</html>





