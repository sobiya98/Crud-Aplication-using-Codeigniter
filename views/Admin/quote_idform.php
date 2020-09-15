<?php include('header.php') ?>
  	<div class ="container" style ="margin-top: 30px; border: 12px solid #B22222;  padding-top: 50px padding-right: 50px; padding-left: 50px; padding-bottom: 50px;">
  		<!-- this go to admin controller on login function.. -->
          <?php echo form_hidden('rid',$this->session->userdata('id')); ?>
          <?php //echo form_hidden('qid',$this->session->userdata('qid'));  /*print_r($this->session->userdata('qid'));*/?>
      <?php echo form_open('admin/find_quote'); ?>
      <?php // print_r($e); ?>
       <h1 align="center">Enter Quote ID ti find</h1>

       <div class ="row">
       <div class ="col-lg-6">
        <div class="form-group">
           <label for="qid">Quote Id</label>
             <?php echo form_input(['class' => 'form-control','name' => 'qid','placeholder' =>'Enter Quote ID to Update']); ?>
        </div> 
       </div>
     </div>
    <button type="submit" class="btn btn-primary">Get Id</button> 
</div>
