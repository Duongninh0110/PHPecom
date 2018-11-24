<div class="panel panel-default"><!-- panel panel-default sidebar-menu start -->
  <div class="panel-heading"><!-- panel-heading start -->
    <center>
      <img src="customer_images/brock_lesnar.jpg" class="img-responsive">
    </center>
    <br>
    <h3 align="center" class="panel-title">Name: Brock Lesnar</h3>
  </div><!-- panel-heading end -->
  <div class="panel-body"><!-- panel-body start -->
    <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu start -->
      <li class="<?php if(isset($_GET['my_orders'])){echo "active";} ?>">
        <a href="my_account.php?my_orders"><i class="fa fa-list"></i> My Order</a>
      </li>

      <li class="<?php if(isset($_GET['pay_offline'])){echo "active";} ?>">
        <a href="my_account.php?pay_offline"><i class="fa fa-bolt"></i> Pay offline</a>
      </li>

      <li class="<?php if(isset($_GET['edit_account'])){echo "active";} ?>">
        <a href="my_account.php?edit_account"><i class="fa fa-pencil"></i> Edit Account</a>
      </li>

      <li class="<?php if(isset($_GET['change_pass'])){echo "active";} ?>">
        <a href="my_account.php?change_pass"><i class="fa fa-user"></i> Change Password</a>
      </li>

      <li class="<?php if(isset($_GET['delete_account'])){echo "active";} ?>">
        <a href="my_account.php?delete_account"><i class="fa fa-trash-o"></i> Delete Account</a>
      </li>

      <li>
        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
      </li>
      
    </ul><!-- nav nav-pills nav-stacked category-menu end -->
  </div><!-- panel-body end -->
</div><!-- panel panel-default sidebar-menu end -->

