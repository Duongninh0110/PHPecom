<div class="box-header"><!-- box-header start -->
    <center>
        <h2>Register a new Account</h2>
    </center>
</div><!-- box-header end -->
<form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form start -->
   <div class="form-group">
       <label>Customer Name</label>
       <input type="text" name="c_name" class="form-control">
   </div>

   <div class="form-group">
       <label>Customer Email</label>
       <input type="text" name="c_email" class="form-control">
   </div>

   <div class="form-group">
       <label>Customer Password</label>
       <input type="password" name="c_pass" class="form-control">
   </div>

   <div class="form-group">
       <label>Customer Country</label>
       <input type="password" name="c_country" class="form-control">
   </div>

   <div class="form-group">
       <label>Customer City</label>
       <input type="password" name="c_city" class="form-control">
   </div>

   <div class="form-group">
       <label>Customer Contact</label>
       <input type="password" name="c_contact" class="form-control">
   </div>

   <div class="form-group">
       <label>Customer Address</label>
       <input type="password" name="c_address" class="form-control">
   </div>

   <div class="form-group">
       <label>Customer Image</label>
       <input type="file" name="c_image" class="form-control">
   </div>
   <img src="customer_images/brock_lesnar.jpg" width="100" height="100" class="img-responsive">

   <div class="text-center">
       <button class="btn btn-primary" type="submit" name="submit">
           <i class="fa fa-user-md"> Update Now</i>
       </button>
   </div>
</form> <!-- form end -->