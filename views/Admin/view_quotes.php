<?php include('header.php') ?>
<!-- controller and functioon -->
     <?php echo form_hidden('rid',$this->session->userdata('id')); ?>
<?php echo form_open('admin/delete_quote'); ?>
<?php // print_r($quote_data); ?>
<?php // print_r($e); ?>
  <div class ="container" style ="margin-top: 30px; border: 2px solid #B22222;  padding-top: 50px padding-right: 50px; padding-left: 50px; padding-bottom: 50px;">
  	<table class="table table-hover , table-primary" style ="margin-top:30px;">
  <thead>
    <tr>
      <th><input type="checkbox" id="select_all" value=""/></th>
      <th></th>
      <th>Quote Data</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($quote_data as $quote): ?>
    <tr class="table-success">
      <th><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $quote->qid; ?>"></th>
      <td><?php echo $quote->qname; ?></td>
      <td><?php echo $quote->qdata; ?></td>
    </tr>
  <?php endforeach; ?> 

 
  </tbody>
</table> 
</div>
<div class ="container" style ="margin-top: 30px; padding-top: 50px padding-right: 50px; padding-left: 50px; padding-bottom: 50px;">
   <div class="row">
   <div class ="col">
        <!-- contoller and function..  -->
        <?php echo anchor('Admin/add_quotes','Add Quotes','class="btn btn-info"'); ?>
   </div>

   <div class ="col">
      <!-- used because this option send page to for_open.. -->
       <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete Quotes"/> 
     </div>

   <div class ="col">
       <?php echo anchor('Admin/find_quote','Update Quote','class="btn btn-info"'); ?>
   </div>
</div>

</div>
<script>
//to check all
 $(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
  
  /*  $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    }); */
});
</script>