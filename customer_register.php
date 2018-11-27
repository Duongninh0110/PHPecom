<?php 
include ('includes/db.php');
include ('functions/functions.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E commerce Store</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <?php 
    include ("includes/top.php");
     ?>

     <?php 
    include ("includes/navbar.php");
     ?>
     <div id="content"><!-- content start -->
         <div class="container"><!-- container start -->
             <div class="col-md-12"><!-- col-md-12 start -->
                 <div class="breadcrumb"><!-- breadcrumb start -->
                     <li><a href="index.php">Index</a></li>
                     <li><a href="shop.php">Register</a></li>
                 </div><!-- breadcrumb end -->
             </div><!-- col-md-12 end -->

             <div class="col-md-3"><!-- col-md-3 start -->
                 <?php include("includes/sidebar.php") ?>
             </div><!-- col-md-3 end -->

             <div class="col-md-9"><!-- col-md-9 start -->
                 <div class="box"><!--  box start -->
                     <div class="box-header"><!-- box-header start -->
                         <center>
                             <h2>Register a new Account</h2>
                         </center>
                     </div><!-- box-header end -->
                     <form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form start -->
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" name="c_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Email</label>
                            <input type="text" name="c_email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Password</label>
                            <input type="password" name="c_pass" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Country</label>
                            <input type="password" name="c_country" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer City</label>
                            <input type="password" name="c_city" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Contact</label>
                            <input type="password" name="c_contact" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Address</label>
                            <input type="password" name="c_address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Image</label>
                            <input type="file" name="c_image" class="form-control">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">
                                <i class="fa fa-user-md"> Register</i>
                            </button>
                        </div>
                         

                     </form> <!-- form end -->
                 </div> <!-- box end --> 
             </div><!-- col-md-9 end -->

            
         </div><!-- container end -->
     </div><!-- content end -->

    <?php 
    include ("includes/footer.php");
     ?>
	
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>