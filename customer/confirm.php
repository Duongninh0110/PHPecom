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
                     <li><a href="shop.php">My Account</a></li>
                 </div><!-- breadcrumb end -->
             </div><!-- col-md-12 end -->

             <div class="col-md-3"><!-- col-md-3 start -->
                 <?php include("includes/sidebar.php") ?>
             </div><!-- col-md-3 end -->

             <div class="col-md-9"><!-- col-md-9 start -->
                 <div class="box"><!-- box start -->
                     <h1 align="center">Please Confirm your Payment</h1>
                     <form action="confirm.php" method="post" enctype="mutipart/form-data">
                         <div class="form-group">
                             <label>Invoice No:</label>
                             <input type="text" class="form-control" name="invoice_no" required>
                         </div>

                         <div class="form-group">
                             <label>Amount Sent:</label>
                             <input type="text" class="form-control" name="amount_sent" required>
                         </div>

                         <div class="form-group">
                             <label>Select Pament Mode:</label>
                             <select name="payment_mode" class="form-control">
                                 <option>Select Pament Mode</option>
                                 <option>Bank Code</option>
                                 <option>UBL/Omni Paisa</option>
                                 <option>Easy Paisa</option>
                                 <option>Western Union</option>
                             </select>
                         </div>

                         <div class="form-group">
                             <label>Transaction/ Reference Id:</label>
                             <input type="text" class="form-control" name="ref_no" required>
                         </div>

                         <div class="form-group">
                             <label>Easy Paisa/ Omni Code:</label>
                             <input type="text" class="form-control" name="code" required>
                         </div>

                         <div class="form-group">
                             <label>Payment Date:</label>
                             <input type="text" class="form-control" name="date" required>
                         </div>

                         <div class="text-center">
                             <button type="submit" class="btn btn-primary btn-lg" name="confirm_payment">
                                 <i class="fa fa-user-md"> Confirm Payment  </i>
                             </button>
                         </div>
                     </form>
                 </div><!-- box end -->
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