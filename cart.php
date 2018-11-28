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
                     <li><a href="shop.php">Cart</a></li>
                 </div><!-- breadcrumb end -->
             </div><!-- col-md-12 end -->
            <div class="col-md-9" id="cart"><!-- col-md-9 start -->
                <div class="box"><!-- box start -->
                    <form action="cart.php" method="post" enctype="multipart-form-data"><!-- form start -->
                        <h1>Shopping Cart</h1>

                        <?php
                        $ip_add = getRealUserIp();
                        $select_cart = "select * from cart where ip_add = '$ip_add'";
                        $run_cart = mysqli_query($con, $select_cart);
                        $count = mysqli_num_rows($run_cart)
                         ?>

                        <p class="text-muted">You currently have <?php echo $count; ?> items in your cart</p>
                        <div class="table-responsive"><!-- table-responsive start -->
                            <table class="table"> 
                                <thead> 
                                    <tr> 
                                        <th colspan="2">Product</th> 
                                        <th>Quantity</th> 
                                        <th>Unit Price</th> 
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub total</th> 
                                    </tr>
                                </thead> 
                                <tbody> 

                                    <?php 
                                        $total = 0;
                                        while ($row_cart = mysqli_fetch_array($run_cart)) {
                                            $pro_id = $row_cart['p_id'];
                                            $pro_size = $row_cart['size'];
                                            $pro_qty = $row_cart['qty'];
                                            $get_product = "select * from products where product_id = '$pro_id'";
                                            $run_product = mysqli_query($con, $get_product);
                                            $row_product = mysqli_fetch_array($run_product);
                                            $product_title = $row_product['product_title'];
                                            $product_img1 = $row_product['product_img1'];
                                            $product_price = $row_product['product_price'];
                                            $sub_total = $row_product['product_price']*$pro_qty;
                                            $total += $sub_total;
                                    ?>


                                      
                                    <tr> 
                                        <td>
                                            <img src="admin_area/product_images/<?php echo$product_img1; ?>">
                                        </td> 
                                        <td><a href="#"><?php echo $product_title; ?></a></td> 
                                        <td><?php echo $pro_qty; ?></td>
                                        <td>$<?php echo $product_price; ?>.00</td> 
                                        <td><?php echo $pro_size; ?></td> 
                                        <td>
                                            <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                        </td>
                                        <td>$<?php echo $sub_total; ?>.00</td>
                                    </tr>

                                    <?php 
                                        }
                                     ?>

                                </tbody> 
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">$<?php echo $total; ?>.00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- table-responsive end -->

                        <div class="box-footer"><!-- box-footer start -->
                            <div class="pull-left"><!-- pull-left start -->
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"> Continue Shopping</i>
                                </a>
                            </div><!-- pull-left end -->

                            <div class="pull-right"><!-- pull-right start -->
                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                    <i class="fa fa-refresh"> Update Cart</i>
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    <i class="fa fa-chevron-right"> Proceed to Checkout</i>
                                </a>
                            </div><!-- pull-right end -->
                        </div><!-- box-footer end -->
                    </form><!-- form end -->
                </div><!-- box end -->

                <?php 

                function update_cart(){
                    global $con;
                    if (isset($_POST['update'])){
                        foreach ($_POST['remove'] as $remove_id) {
                            // echo "<prev>"; print_r($remove_id); die;
                            $delete_product = "delete from cart where p_id = '$remove_id'";
                            $run_delete = mysqli_query($con, $delete_product);
                            // echo "<prev>"; print_r($run_delete); die;
                            if($run_delete){
                                echo "<script>window.open('cart.php', '_self')</script>";
                            }
                        }
                    }
                }

                echo @$up_cart = update_cart();

                 ?>

                <div class="row same-height-row"><!-- row same-height-row start -->
                    <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start -->
                        <div class="box same-height headline"><!-- box same-height headline start -->
                            <h3 class="text-center">You also like these products</h3>
                        </div><!-- box same-height headline end -->
                    </div><!-- col-md-3 col-sm-6 end -->

                    <?php 

                           $get_products = "select* from products order by rand() limit 0,3";
                           $run_products = mysqli_query($con, $get_products);
                           while ($row_products = mysqli_fetch_array($run_products)) {
                               $product_id = $row_products['product_id'];
                               $product_title = $row_products['product_title'];
                               $product_price = $row_products['product_price'];
                               $product_img1 = $row_products['product_img1'];

                               echo "
                                   <div class='center-responsive col-md-3 col-sm-6'><!-- center-responsive col-md-3 col-sm-6 start -->
                                       <div class='product same-height'><!-- product same-height start -->
                                           <a href='details.php?pro_id=$product_id'>
                                               <img src='admin_area/product_images/$product_img1' class='img-responsive'>
                                           </a>

                                           <div class='text'><!-- text start -->
                                               <h3>
                                                   <a href='details.php?pro_id=$product_id'>$product_title</a>
                                               </h3>

                                               <p class='price'>$$product_price</p>
                                           </div><!-- text end -->
                                       </div><!-- product same-height end -->
                                   </div><!-- center-responsive col-md-3 col-sm-6 end -->

                               ";
                           }
                     ?>
                    
                </div><!-- row same-height-row end -->
            </div><!-- col-md-9 end -->
            <div class="col-md-3"><!-- col-md-3 start -->
                <div class="box" id="order-summary"><!-- box start -->
                    <div class="box-header"><!-- box-header start -->
                        <h3>Order Summary</h3>
                    </div><!-- box-header end -->
                    <p class="text-muted">
                        Shipping and addtional cost are caculated based on value you have entered.
                    </p>

                    <div class="table-responsive"><!-- table-responsive start -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Subtotal</td>
                                    <th>$<?php echo $total; ?>.00</th>
                                </tr>
                                <tr>
                                    <td>Shipping and handling</td>
                                    <th>$0.00</th>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>$0.00</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>$<?php echo $total; ?>.00</th>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- table-responsive end -->
                </div><!-- box end -->
            </div><!-- col-md-3 end -->
         </div><!-- container end -->
     </div><!-- content end -->

    <?php 
    include ("includes/footer.php");
     ?>
	
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>