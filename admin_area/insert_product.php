<?php 
include ('includes/db.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Product</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="styles/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <div class="row"><!-- row start -->
        <div class="col-md-12"><!-- col-md-12 start -->
            <ol class="breadcrumb"><!-- breadcrumb start -->
               <li class="active">
                   <i class="fa fa-dashboard">DashBoard/ Insert Product</i>
               </li>
            </ol><!-- breadcrumb end -->
        </div><!-- col-md-12 end -->
    </div><!-- row end -->

    <div class="row"><!-- row start -->
        <div class="col-md-12"><!-- col-md-12 start -->
            <div class="panel panel-default"><!-- panel panel-default sidebar-menu start -->
              <div class="panel-heading"><!-- panel-heading start -->
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Insert Product
                </h3>
              </div><!-- panel-heading end -->
              <div class="panel-body"><!-- panel-body start -->
                <form class="form-horizontal" action="insert_product.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Title</label>
                        <div class="col-md-6">
                            <input type="text" name="product_title" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Category</label>
                        <div class="col-md-6">
                            <select name="product_cat" class="form-control">
                                <option>Select a product category</option>
                                <?php 
                                $get_p_cats = "select* from product_categories";
                                $run_p_cats = mysqli_query($con, $get_p_cats);
                                while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
                                    $p_cat_id = $row_p_cats['p_cat_id'];
                                    $p_cat_title = $row_p_cats['p_cat_title'];

                                    echo "
                                        <option value='$p_cat_id'>$p_cat_title</option>

                                    ";
                                }
                                 ?>
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Category</label>
                        <div class="col-md-6">
                            <select name="cat" class="form-control">
                                <option>Select a category</option>
                                <?php 
                                $get_cats = "select* from categories";
                                $run_cats = mysqli_query($con, $get_cats);
                                while ($row_cats = mysqli_fetch_array($run_cats)) {
                                    $cat_id = $row_cats['cat_id'];
                                    $cat_title = $row_cats['cat_title'];

                                    echo "
                                        <option value='$cat_id'>$cat_title</option>

                                    ";
                                }
                                 ?>
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Image 1</label>
                        <div class="col-md-6">
                            <input type="file" name="product_img1" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Image 2</label>
                        <div class="col-md-6">
                            <input type="file" name="product_img2" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Image 3</label>
                        <div class="col-md-6">
                            <input type="file" name="product_img3" class="form-control" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Product price</label>
                        <div class="col-md-6">
                            <input type="number" name="product_price" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Description</label>
                        <div class="col-md-6">
                            <textarea name="product_desc" class="form-control" rows="6" cols="19" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Keywords</label>
                        <div class="col-md-6">
                            <input type="text" name="product_keywords" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="submit" type="submit" value="Insert Product" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </form>
                </ul><!-- nav nav-pills nav-stacked category-menu end -->
              </div><!-- panel-body end -->
            </div><!-- panel panel-default sidebar-menu end -->
        </div><!-- col-md-12 end -->
    </div><!-- row end -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>

<?php 

if(isset($_POST['submit'])){

    // echo '<pre>'; print_r($_FILES['product_img1']); die; 
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1, "product_images/$product_img1");
    move_uploaded_file($temp_name2, "product_images/$product_img2");
    move_uploaded_file($temp_name3, "product_images/$product_img3");

    $insert_product = "INSERT INTO products (p_cat_id, cat_id, date, product_title, product_img1, product_img2, product_img3, product_price, product_desc, product_keywords) VALUES ('$product_cat', '$cat', now(), '$product_title', '$product_img1', '$product_img2', '$product_img3', '$product_price', '$product_desc', '$product_keywords')";

    $run_product = mysqli_query($con, $insert_product);

    if($run_product){
        echo "<script> alert('Product has been inserted successfully')</script>";
        echo "<script> window.open('insert_product.php', '_self')</script>";
    }


}

 ?>