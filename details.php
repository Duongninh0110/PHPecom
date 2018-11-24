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
                 <div class="row" id="productMain"><!-- row start -->
                     <div class="col-md-6"><!-- col-md-6 start -->
                         <div id="mainImage"><!-- mainImage start -->
                             <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                 <ol class="carousel-indicators"><!-- carousel-indicators start -->
                                     <li><a href="#myCarousel" data-slide-to="0" class="active"></a></li>
                                     <li><a href="#myCarousel" data-slide-to="1"></a></li>
                                     <li><a href="#myCarousel" data-slide-to="2"></a></li>
                                 </ol><!-- carousel-indicators end -->

                                 <div class="carousel-inner"><!-- carousel-inner start -->
                                     <div class="item active">
                                        <center>
                                            <img src="admin_area/product_images/product.jpg">
                                        </center>
                                     </div>
                                     <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/product2.jpg">
                                        </center>
                                     </div>
                                     <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/product3.jpg">
                                        </center>
                                     </div>

                                 </div><!-- carousel-inner end -->

                                 <a class="left carousel-control" href="#myCarousel" data-slide="prev"><!-- left-carousel-control start -->
                                     <span class="glyphicon glyphicon-chevron-left"></span>
                                     <span class="sr-only">Previous</span>
                                 </a><!-- left-carousel-control end -->

                                 <a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- left-carousel-control start -->
                                     <span class="glyphicon glyphicon-chevron-right"></span>
                                     <span class="sr-only">Next</span>
                                 </a><!-- left-carousel-control end -->
                             </div>
                         </div><!-- mainImage end -->
                     </div><!-- col-md-6 end -->

                     <div class="col-md-6"><!-- col-md-6 start -->
                         <div class="box"><!-- box start -->
                             <h1 class="text-center">Marvel Black Kids Polo T-Shirt</h1>
                             <form action="details.php" method="post" class="form-horizontal"><!-- form-horizontal start -->
                                <div class="form-group"><!-- form-group start -->
                                    <label class="col-md -5 control-label">Product Quantity</label>
                                    <div class="col-md-7"><!-- col-md-7 start -->
                                        <select name="product_qty" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div><!-- col-md-7 end -->
                                </div><!-- form-group end -->

                                <div class="form-group"><!-- form-group start -->
                                    <label class="col-md -5 control-label">Product Quantity</label>
                                    <div class="col-md-7"><!-- col-md-7 start -->
                                        <select name="product_size" class="form-control">
                                            <option>Select a size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div><!-- col-md-7 end -->
                                </div><!-- form-group end -->
                                <p class="price">$50</p>
                                <p class="text-center buttons"><!-- text-center buttons start -->
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"> Add to cart</i>
                                    </button>
                                </p><!-- text-center buttons end -->
                                 
                             </form><!-- form-horizontal end -->
                         </div><!-- box end -->

                         <div id="thumbs" class="row"><!-- row start -->
                             <div class="col-xs-4"><!-- col-xs-4 start -->
                                 <a href="#" class="thumb">
                                     <img src="admin_area/product_images/product.jpg" class="img-responsive">
                                 </a>
                             </div><!-- col-xs-4 end -->

                             <div class="col-xs-4"><!-- col-xs-4 start -->
                                 <a href="#" class="thumb">
                                     <img src="admin_area/product_images/product2.jpg" class="img-responsive">
                                 </a>
                             </div><!-- col-xs-4 end -->

                             <div class="col-xs-4"><!-- col-xs-4 start -->
                                 <a href="#" class="thumb">
                                     <img src="admin_area/product_images/product3.jpg" class="img-responsive">
                                 </a>
                             </div><!-- col-xs-4 end -->
                         </div><!-- row end -->
                     </div><!-- col-md-6 end -->
                 </div><!-- row end -->

                 <div class="box" id="details"><!-- box start -->
                     <p>
                         <h4>Product Details</h4>
                         <p>
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                         </p>
                         <h4>Size</h4>
                         <ul>
                             <li>Small</li>
                             <li>Medium</li>
                             <li>Large</li>
                         </ul>
                     </p>

                     <hr>

                 </div><!-- box end -->

                 <div class="row same-height-row"><!-- row same-height-row start -->
                     <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start -->
                         <div class="box same-height headline"><!-- box same-height headline start -->
                             <h3 class="text-center">You also like these products</h3>
                         </div><!-- box same-height headline end -->
                     </div><!-- col-md-3 col-sm-6 end -->

                     <div class="center-responsive col-md-3 col-sm-6"><!-- center-responsive col-md-3 col-sm-6 start -->
                         <div class="product same-height"><!-- product same-height start -->
                             <a href="details.php">
                                 <img src="admin_area/product_images/product.jpg" class="img-responsive">
                             </a>

                             <div class="text"><!-- text start -->
                                 <h3>
                                     <a href="details.php">Marvel Black Kids Polo T-Shirt</a>
                                 </h3>

                                 <p class="price">$50</p>
                             </div><!-- text end -->
                         </div><!-- product same-height end -->
                     </div><!-- center-responsive col-md-3 col-sm-6 end -->

                     <div class="center-responsive col-md-3 col-sm-6"><!-- center-responsive col-md-3 col-sm-6 start -->
                         <div class="product same-height"><!-- product same-height start -->
                             <a href="details.php">
                                 <img src="admin_area/product_images/product.jpg" class="img-responsive">
                             </a>

                             <div class="text"><!-- text start -->
                                 <h3>
                                     <a href="details.php">Marvel Black Kids Polo T-Shirt</a>
                                 </h3>

                                 <p class="price">$50</p>
                             </div><!-- text end -->
                         </div><!-- product same-height end -->
                     </div><!-- center-responsive col-md-3 col-sm-6 end -->

                     <div class="center-responsive col-md-3 col-sm-6"><!-- center-responsive col-md-3 col-sm-6 start -->
                         <div class="product same-height"><!-- product same-height start -->
                             <a href="details.php">
                                 <img src="admin_area/product_images/product.jpg" class="img-responsive">
                             </a>

                             <div class="text"><!-- text start -->
                                 <h3>
                                     <a href="details.php">Marvel Black Kids Polo T-Shirt</a>
                                 </h3>

                                 <p class="price">$50</p>
                             </div><!-- text end -->
                         </div><!-- product same-height end -->
                     </div><!-- center-responsive col-md-3 col-sm-6 end -->
                     
                 </div><!-- row same-height-row end -->
             </div><!-- col-md-9 start -->
         </div><!-- container end -->
     </div><!-- content end -->

    <?php 
    include ("includes/footer.php");
     ?>
	
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>