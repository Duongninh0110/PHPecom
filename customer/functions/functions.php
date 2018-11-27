<?php 

    $db=mysqli_connect('localhost', 'root', 'mau0954010058', 'ecom_store');

    function getPro ()
    {
        global $db;

        $get_products = "select* from products limit 0,8";
        $run_products = mysqli_query($db, $get_products);
        while ($row_products = mysqli_fetch_array($run_products)) {
            $product_id = $row_products['product_id'];
            $product_title = $row_products['product_title'];
            $product_price = $row_products['product_price'];
            $product_img1 = $row_products['product_img1'];

            echo "
                <div class='col-sm-4 col-sm-6 single'><!-- col-sm-4 col-sm-6 single start -->
                    <div class='product'><!-- product start -->
                        <a href='details.php?pro_id=$product_id'>
                            <img src='admin_area/product_images/$product_img1' class='img-responsive'>
                        </a>
                        <div class='text'><!-- text start -->
                            <h3><a href='details.php?pro_id=$product_id'>$product_title</a></h3>
                            <p class='price'>$$product_price</p>
                            <p class='buttons'>
                                <a href='details.php?pro_id=$product_id' class='btn btn-default'>View Details</a>
                                <a href='details.php?pro_id=$product_id' class='btn btn-primary'>
                                    <i class='fa fa-shopping-cart'> Add to cart</i>
                                </a>
                            </p>
                        </div>
                    </div><!-- product end -->
                    
                </div><!-- col-sm-4 col-sm-6 single end -->

            ";
        }
    }
 ?>