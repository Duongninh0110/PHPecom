<div class="box"><!--  box start -->
    <div class="box-header"><!-- box-header start -->
        <center>
            <h1>Login</h1>
            <p class="lead">Already our customer</p>
        </center>

        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
    </div><!-- box-header end -->

    <form action="" method="post">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="c_email" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="c_pass" class="form-control" required>
        </div>

        <div class="text-center">
            <button class="btn btn-primary" name="login" value="Login">
                <i class="fa fa-sign-in"> Login</i>
            </button>
        </div>
    </form>

    <center>
        <a href="customer_register.php">
            <h3>New? Register Here</h3>
        </a>
    </center>
    
</div><!-- box end -->

<?php 
if(isset($_POST['login'])){
    $customer_email = $_POST['c_email'];
    $customer_pass = $_POST['c_pass'];
    $select_customer = "select * from customers where customer_email = '$customer_email' and customer_pass = '$customer_pass'";
    $run_customer = mysqli_query($con, $select_customer);
    $get_ip = getRealUserIp();

    $check_customer = mysqli_num_rows($run_customer);
    $select_cart = "select * from cart where ip_add = '$get_ip'";
    $run_cart = mysqli_query($con, $select_cart);
    $check_cart = mysqli_num_rows($run_cart);
    if($check_customer === 0){
        echo "<script>alert('password or email is incorrect')</script>";
        exit();
    }

    if($check_customer === 1 && $check_cart === 0){
        $_SESSION['customer_email'] = $customer_email;
        echo "<script>alert('You have logged in')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders', '_self')</script>";
    } else {
        $_SESSION['customer_email'] = $customer_email;
        echo "<script>alert('You have logged in')</script>";
        echo "<script>window.open('checkout.php', '_self')</script>";
    }

}

 ?>