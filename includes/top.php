<div id="top"> <!-- top start -->
    <div class="container"><!-- container start -->
        <div class="col-md-6 offer"> <!-- col-md-6 offer start -->
            <a href="#" class="btn btn-success btn-small">

                <?php 
                    if(!isset($_SESSION['customer_email'])){

                    echo "Welcome :Guest";


                    }else{

                    echo "Welcome : " . $_SESSION['customer_email'] . "";

                    }
                 ?>
                
            </a>

            <a href="#">
                Shopping Cart Total Price: $<?php total_price(); ?>; Total items:<?php items(); ?>
            </a>
        </div><!-- col-md-6 offer end -->

        <div class="col-md-6"><!-- col-md-6 start -->
            <ul class="menu"><!--  menu start -->
                <li><a href="customer_register.php">Register</a></li>
                <li>
                    <?php 
                        if (!isset($_SESSION['customer_email'])) {
                            echo "<a href='checkout.php'>My Account</a>";
                        } else {
                            echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                        }
                     ?>
                </li>
                <li><a href="cart.php">Go To Cart</a></li>
                

                <?php 
                    if(!isset($_SESSION['customer_email'])){
                        echo "<li><a href='checkout.php'>Login</a></li>";
                    } else {
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                 ?>
            </ul><!-- menu end -->
        </div><!-- col-md-6 end -->
    </div><!-- container end -->
</div><!-- end top -->