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
                     <li><a href="shop.php">Contact Us</a></li>
                 </div><!-- breadcrumb end -->
             </div><!-- col-md-12 end -->

             <div class="col-md-3"><!-- col-md-3 start -->
                 <?php include("includes/sidebar.php") ?>
             </div><!-- col-md-3 end -->

             <div class="col-md-9"><!-- col-md-9 start -->
                 <div class="box"><!--  box start -->
                     <div class="box-header"><!-- box-header start -->
                         <center>
                             <h2>Contact Us</h2>
                             <p class="text-muted">
                                 If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.
                             </p>
                         </center>
                     </div><!-- box-header end -->
                     <form action="contact.php" method="post"><!-- form start -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" name="message"></textarea>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">
                                <i class="fa fa-user-md"> Send Message</i>
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