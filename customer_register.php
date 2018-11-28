<?php 
include ('includes/db.php');
include ('functions/functions.php');
session_start();
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
                            <input type="text" name="c_country" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer City</label>
                            <input type="text" name="c_city" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Contact</label>
                            <input type="text" name="c_contact" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Address</label>
                            <input type="text" name="c_address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Image</label>
                            <input type="file" name="c_image" class="form-control">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="register">
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

<?php 
    if(isset($_POST['register'])){
        $c_name = $_POST['c_name'];
        $c_email = $_POST['c_email'];
        $c_pass = $_POST['c_pass'];
        $c_country = $_POST['c_country'];
        $c_city = $_POST['c_city'];
        $c_contact = $_POST['c_contact'];
        $c_address = $_POST['c_address'];
        $c_image = $_FILES['c_image']['name'];
        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        $c_ip = getRealUserIp();

        move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");
        $insert_customer = "insert into customers (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image, customer_ip) values ('$c_name', '$c_email', '$c_pass', '$c_country', '$c_city', '$c_contact', '$c_address', '$c_image', '$c_ip') ";

        $run_customer = mysqli_query($con, $insert_customer);
        $sel_cart = "select * from cart where ip_add = '$c_ip'";
        $run_cart = mysqli_query($con, $sel_cart);
        $check_cart = mysqli_num_rows($run_cart);
        // echo "<prev>"; print_r($check_cart); die;

        if($check_cart>0){
            $_SESSION['customer_email'] = $c_email;
            echo "<script>alert('you have registered successfully')</script>";
            echo "<script>window.open('checkout.php', '_self')</script>";
        } else {
            $_SESSION['customer_email'] = $c_email;
            echo "<script>alert('you have registered successfully')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
    }

 ?>