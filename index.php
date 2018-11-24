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

    

    <div class="container" id="slider"><!-- container start -->
        <div class="col-md-12"><!-- col-md-12 start -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide start -->
                <ol class="carousel-indicators"><!-- carousel-indicators start -->
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol><!-- carousel-indicators end -->
                <div class="carousel-inner"><!-- carousel-inner start -->
                    <div class="item active">
                        <img src="admin_area/slides_images/1.jpg">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/2.jpg">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/3.jpg">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/4.jpg">
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
            </div><!-- carousel slide end -->
        </div><!-- col-md-12 end -->
    </div><!-- container end -->

    <div id="advantages"><!-- advantages start -->
        <div class="container"><!-- container start -->
            <div class="same-height-row"><!-- same-height-row start -->
                <div class="col-md-4"><!-- col-md-4 start -->
                    <div class="box same-height"><!-- box same-height start -->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                            
                        </div>
                        <h3><a href="">WE LOVE OUR CUSTOMER</a></h3>
                        <p>
                            We are known to provide best service ever
                        </p>
                    </div><!-- box same-height end -->
                </div><!-- col-md-4 end -->

                <div class="col-md-4"><!-- col-md-4 start -->
                    <div class="box same-height"><!-- box same-height start -->
                        <div class="icon">
                            <i class="fa fa-tags"></i>
                            
                        </div>
                        <h3><a href="">BEST PRICE</a></h3>
                        <p>
                            You can check price of all other sites then compare with us
                        </p>
                    </div><!-- box same-height end -->
                </div><!-- col-md-4 end -->

                <div class="col-md-4"><!-- col-md-4 start -->
                    <div class="box same-height"><!-- box same-height start -->
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                            
                        </div>
                        <h3><a href="">100% SATIFICATION GUARANTEE</a></h3>
                        <p>
                            Free return everthing for 3 months
                        </p>
                    </div><!-- box same-height end -->
                </div><!-- col-md-4 end -->
            </div><!-- same-height-row end -->
        </div><!-- container end -->
        
    </div><!-- advantages end -->

    <div id="hot"><!-- hot start -->
        <div class="box"><!-- box start -->
            <div class="container"><!-- container start -->
                <div class="col-md-12"><!-- col-md-12 start -->
                    <h2>Latest This Week</h2>
                </div><!-- col-md-12 end -->
            </div><!-- container end -->
        </div><!-- box end -->
    </div><!-- hot end -->

    <div id="content" class="container"> <!-- container start -->
        <div class="row">
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start -->
                <div class="product"><!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/product.jpg" class="img-responsive">
                    </a>
                    <div class="text"><!-- text start -->
                        <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                        <p class="price">$50</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Add to cart</i>
                            </a>
                        </p>
                    </div>
                </div><!-- product end -->
                
            </div><!-- col-sm-4 col-sm-6 single end -->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start -->
                <div class="product"><!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/product.jpg" class="img-responsive">
                    </a>
                    <div class="text"><!-- text start -->
                        <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                        <p class="price">$50</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Add to cart</i>
                            </a>
                        </p>
                    </div>
                </div><!-- product end -->
                
            </div><!-- col-sm-4 col-sm-6 single end -->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start -->
                <div class="product"><!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/product.jpg" class="img-responsive">
                    </a>
                    <div class="text"><!-- text start -->
                        <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                        <p class="price">$50</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Add to cart</i>
                            </a>
                        </p>
                    </div>
                </div><!-- product end -->
                
            </div><!-- col-sm-4 col-sm-6 single end -->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start -->
                <div class="product"><!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/product.jpg" class="img-responsive">
                    </a>
                    <div class="text"><!-- text start -->
                        <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                        <p class="price">$50</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Add to cart</i>
                            </a>
                        </p>
                    </div>
                </div><!-- product end -->
                
            </div><!-- col-sm-4 col-sm-6 single end -->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single start -->
                <div class="product"><!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/product.jpg" class="img-responsive">
                    </a>
                    <div class="text"><!-- text start -->
                        <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                        <p class="price">$50</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Add to cart</i>
                            </a>
                        </p>
                    </div>
                </div><!-- product end -->
                
            </div><!-- col-sm-4 col-sm-6 single end -->

            
        </div><!-- row end -->
    </div><!-- container end -->

    <?php 
    include ("includes/footer.php");
     ?>
	
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>