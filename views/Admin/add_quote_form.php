<?php include('header.php') ?>
  	<div class ="container" style ="margin-top: 30px; border: 12px solid #B22222;  padding-top: 50px padding-right: 50px; padding-left: 50px; padding-bottom: 50px;">
  		<!-- this go to admin controller on add_quote function.. -->
      <?php echo form_open('admin/add_quotes');  ?>
      <!-- this is beacuse for the particular admin add data-->
      <?php echo form_hidden('rid',$this->session->userdata('id')); ?>
       <h1 align="center">Add New Quotes </h1>
  	 <div class ="row">
  	   <div class ="col-lg-6">
        <div class="form-group">
           <label for="Username">Quote Name</label>
             <?php echo form_input(['class' => 'form-control','name' => 'qname','placeholder' =>'Enter Quote Name']); ?>
        </div> 
       </div>
     </div>

      <div class ="row">
       <div class ="col-lg-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Quote data</label>
            <?php echo form_input(['class' => 'form-control','name' => 'qdata','placeholder' =>'Enter Quote Information']); ?>
        </div>
       </div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button> 
</div>
