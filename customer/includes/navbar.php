<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default start -->
    <div class="container"><!-- Container start -->
        <div class="navbar-header"><!-- navbar-header start -->
            <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home start -->
                <img src="images/logo.png" class="hidden-xs">
                <img src="images/logo-small.png" class="visible-xs">
            </a><!-- navbar-brand home end -->

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
            </button>
        </div><!-- navbar-header end -->

        <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start -->
            <div class="padding-nav"><!-- padding-nav start -->
                <ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left start -->
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li class="active">
                        <?php 
                        if (!isset($_SESSION['customer_email'])) {
                            echo "<a href='../checkout.php'>My Account</a>";
                        } else {
                            echo "<a href='my_account.php?my_orders'>My Account</a>";
                        }
                     ?>
                    </li>
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                </ul><!-- nav navbar-nav navbar-left end -->
            </div><!-- padding-nav end -->

            <a href="cart.php" class="btn btn-primary navbar-btn right"><!-- btn btn-primary navbar-btn right start -->
                <i class="fa fa-shopping-cart"></i>
                <span><?php items() ?> items in cart</span>
            </a><!-- btn btn-primary navbar-btn right end -->

            <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right start -->
                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div><!-- navbar-collapse collapse right end -->

            <div class="collapse clearfix" id="search"><!-- collapse clearfix start--> 
                <form class="navbar-form" method="get" action="result.php"><!-- navbar-form start -->
                    <div class="input-group"><!-- input-group start -->
                        <input type="text" name="user_query" placeholder="Search" class="form-control" required >
                        <span class="input-group-btn">
                            <button type="submit" name="search" value="Search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        
                    </div><!-- input-group end -->
                </form><!-- navbar-form end -->
            </div><!-- collapse clearfix end -->

        </div><!-- navbar-collapse collapse end -->
    </div><!--  Container end-->
    
</div><!-- navbar navbar-default end -->