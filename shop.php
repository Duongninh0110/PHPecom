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
                     <li><a href="shop.php">Shop</a></li>
                 </div><!-- breadcrumb end -->
             </div><!-- col-md-12 end -->

             <div class="col-md-3"><!-- col-md-3 start -->
                 <?php include("includes/sidebar.php") ?>
             </div><!-- col-md-3 end -->

             <div class="col-md-9"><!-- col-md-9 start -->
                 
                    <?php 
                        if(!isset($_GET['p_cat'])){
                            if(!isset($_GET['cat'])){
                                echo"
                                <div class='box'>
                                    <h1>Shop</h1>
                                    <p>
                                        it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                                    </p>
                                </div>
                                ";
                            }
                        }
                     ?>
                 
                 <div class="row"> <!-- row start -->

                    <?php 
                        if(!isset($_GET['p_cat'])){
                            if(!isset($_GET['cat'])){
                                $per_page = 6;
                                if(isset($_GET['page'])){
                                    $page = $_GET['page'];
                                } else {
                                    $page = 1;
                                }
                                $start_from = ($page-1)*$per_page;
                                $get_products = "select * from products order by 1 desc limit $start_from,$per_page";
                                $run_products = mysqli_query($con, $get_products);
                                while($row_products = mysqli_fetch_array($run_products)){
                                    $product_id = $row_products['product_id'];
                                    $product_title = $row_products['product_title'];
                                    $product_price = $row_products['product_price'];
                                    $product_img1 = $row_products['product_img1'];

                                    echo "
                                        <div class='col-md-4 col-sm-6 center-responsive'><!-- col-md-4 col-sm-6 center-responsive start -->
                                           <div class='product'><!-- product start -->
                                               <a href='details.php?pro_id=$product_id'>
                                                   <img src='admin_area/product_images/$product_img1' class='img-responsive'>
                                               </a>

                                               <div class='text'><!-- text start -->
                                                   <h3>
                                                       <a href='details.php?pro_id=$product_id'>$product_title</a>
                                                   </h3>

                                                   <p class='price'>$$product_price</p>
                                                   <p class='buttons'>
                                                       <a href='details.php?pro_id=$product_id' class='btn btn-default'> View Details</a>
                                                       <a href='details.php?pro_id=$product_id' class='btn btn-primary'>
                                                           <i class='fa fa-shopping-cart'> Add to cart</i>
                                                       </a>
                                                   </p>
                                               </div><!-- text end -->
                                           </div><!--   -->
                                        </div><!-- col-md-4 col-sm-6 center-responsive end -->

                                    ";
                                }
                    ?>

                    </div><!-- row end -->

                    <center> <!-- center start -->
                        <ul class="pagination"><!-- pagination start -->
                           <?php 
                           
                                   $query = "SELECT * FROM products";
                                   $result = mysqli_query($con, $query);
                                   $total_record = mysqli_num_rows($result);
                                   $total_pages = ceil($total_record/$per_page);
                                   echo "
                                       <li><a href='shop.php?page=1'>First Page</a></li>
                                   ";

                                   for($i=1; $i<=$total_pages; $i++){
                                       echo "
                                           <li><a href='shop.php?page=$i'>$i</a></li>
                                       ";
                                   }

                                   echo "
                                       <li><a href='shop.php?page=$total_pages'>Last Page</a></li>
                                   ";
                                   }
                               }
                            ?>
                        </ul><!-- pagination end -->
                    </center><!-- center end -->
                 <?php 
                    getPcatPro();
                    getCatPro();
                ?>
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