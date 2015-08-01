<html>
	<head>	
	<title></title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>        
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"/>
        <script type ="text/javascript" src="jquery.js"></script>        
		<body>
			<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
             <div class="container-fluid">
                 <div class="navbar-header"> <h2><label class=""> Maravilloso Proyecto </label></h2>
                 
               </div>
               <?php
               session_start();
               if (isset($_SESSION['name'])) {
                 
               
                 echo "WelCome  " . $_SESSION['name'];
                 }
               ?>
               <div class="col-md-6"></div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="home.php">Home</a>
                        </li>
                        <li><a href="admin.php">Admin</a>
                        </li>
                        <li><a href="product_table_grid.php">Customer</a>
                        </li>
                        

                        <li><a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
             </div>
           </div>			 		
		</body>
	</head>
</html>