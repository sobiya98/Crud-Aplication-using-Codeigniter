<?php include('header.php') ?>
  	<div class ="container" style ="margin-top: 30px; border: 12px solid #B22222;  padding-top: 50px padding-right: 50px; padding-left: 50px; padding-bottom: 50px;">
  		<!-- this go to admin controller on login function.. -->
      <?php echo form_open('admin/login'); ?>
       <h1 align="center">Login Form </h1>
  	 <div class ="row">
  	   <div class ="col-lg-6">
        <div class="form-group">
           <label for="Username">User Name</label>
             <?php echo form_input(['class' => 'form-control','name' => 'username','placeholder' =>'Enter Username']); ?>
        </div> 
       </div>
       <div class="col-lg-6" style ="margin-top:35px;">
       <?php  echo form_error('username');  ?>
        </div>
     </div>

      <div class ="row">
       <div class ="col-lg-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
            <?php echo form_input(['class' => 'form-control','name' => 'password','placeholder' =>'Enter Password']); ?>
        </div>
       </div>
        <div class="col-lg-6" style ="margin-top:35px;">
       <?php  echo form_error('password');  ?>
        </div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button> 
</div>
