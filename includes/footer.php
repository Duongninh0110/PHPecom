<div id="footer"><!-- footer start -->
	<div class="container"><!-- container start -->
        <div class="row"><!-- row start -->
            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start -->
                <h4>Pages</h4>
                <ul><!--  ul start -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                </ul><!-- ul end -->

                <h4>User Section</h4>
                <ul><!--  ul start -->
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul><!-- ul end -->
                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-md-3 col-sm-6 end -->

            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start -->
                <h4>Top Product Categories</h4>
                <ul><!-- ul start -->
                    <?php 
                        $get_p_cats = "select* from product_categories";
                        $run_p_cats = mysqli_query($con, $get_p_cats);
                        while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "
                                <li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>

                            ";
                        }
                     ?>
                </ul><!-- ul end -->
                <hr class="hidden-md hidden-lg">
            </div><!-- col-md-3 col-sm-6 end -->

            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start -->
                <h4>Where to find us</h4>
                <p><!-- p start -->
                    <strong>DDN LTd</strong>
                    <br>Thuan Thanh
                    <br>Bac Ninh
                    <br>01649 558 536
                    <br>duongninh0110@gmail.com
                    <br>
                    <strong>Duong Ninh</strong>
                </p><!-- p end -->Go to Contact Us Page</a>
                <hr class="hidden-md hidden-lg">
            </div><!-- col-md-3 col-sm-6 end -->

            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start -->
                <h4>Get the news</h4>
                <p class="text-muted">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>

                <form action="" method="post"><!-- form start -->
                    <div class="input-group"><!-- input-group start -->
                        <input type="text" class="form-control" name="email">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-default" value="Subscribe">
                        </span>
                    </div><!-- input-group end -->
                    
                </form><!-- form end -->
                <hr class="hidden-md hidden-lg">

                <h4>Stay in touch</h4>
                <p class="social"><!-- social start -->
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-envelope"></i></a>
                </p><!-- social end -->
                
            </div><!-- col-md-3 col-sm-6 end -->
            
        </div><!-- row end -->
    </div><!-- container end -->
</div> <!-- footer end -->

<div id="copyright"><!-- copyright start -->
    <div class="container"><!-- container start -->
        <div class="col-md-6"><!-- col-md-6 start -->
            <p class="pull-left">
                &copy; 2018 Duong Ninh
            </p>
        </div><!-- col-md-6 end -->

        <div class="col-md-6"><!-- col-md-6 start -->
            <p class="pull-right">
                Templated by <a href="https://www.google.com/">https://www.google.com/</a> 
            </p>
        </div><!-- col-md-6 end -->
    </div><!-- container end -->
</div><!-- copyright end -->