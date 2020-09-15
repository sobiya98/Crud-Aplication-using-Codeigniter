<?php include('header.php') ?>
  	<div class ="container" style ="margin-top: 30px; border: 12px solid #B22222;  padding-top: 50px padding-right: 50px; padding-left: 50px; padding-bottom: 50px;">
  		<!-- this go to admin controller on index function.. -->
      <?php echo form_open_multipart('admin/index'); ?>
       <h1 align="center">Registration Form </h1>
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

      <div class ="row">
       <div class ="col-lg-6">
        <div class="form-group">
          <label for="emailid">Email Id</label>
            <?php echo form_input(['class' => 'form-control','name' => 'emailid','placeholder' =>'Enter Email Id']); ?>
            <!--used in ajax  -->
            <span id ="emailid"></span>
        </div>
       </div>
        <div class="col-lg-6" style ="margin-top:35px;">
       <?php  echo form_error('emailid');  ?>
        </div>
      </div>
      <input type="file" name="userfile" class="form-control">
    <button type="submit" class="btn btn-primary">Submit</button> 
    <?php echo anchor('admin/login','Login', 'class="btn btn-info"'); ?>
    <!--this paert is same like above line but we need to ope class so we used php..
    <a href= "admin/login" class = "btn btn-info">Login </a> -->
</div>


<!--   was used for ajax callih<script>
  $(document).ready(function(){
     $(#emailid).change(function(){
      var emailid = $('#emailid').val();
         alert(emailid);
        if(emailid != ''){
          $.ajax({
            url: "<?php echo base_url(); ?>admin/check_email_availability",
            method: "POST",
            data:{emailid:emailid},
            success:function(data){

              $('#emailid').html(data);
            }
          })
        }
     });


  });
  </script -->