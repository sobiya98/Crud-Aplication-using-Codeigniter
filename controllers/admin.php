


<?php
 class Admin extends My_Controller{
  public function index()
  { 
     // to upload the file..
    $config=[
      //your upload folder..
    'upload_path' => './upload/',
    'allowed_types' => 'gif|jpg|png',
    ];
    $this->load->library('upload',$config);
    //to show the error validation messafe in red colour you can also add this syntax in form validation config file..
    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
  	if($this->form_validation->run('signup') && $this->upload->do_upload())
    {  
      // in this varialble all data coming of formvalidation rule present in config file
       $t = $this->input->post();
       //to load file data
       $data =$this->upload->data();
       //now to add the image path
       $path =base_url("upload/".$data['raw_name'].$data['file_ext']);
       //now store to t
       $t['image_path'] =$path;
       $this->load->model('model');
       if($this->model->registration_data($t))
       {
        // controller and index function
        return redirect('admin/login');
        echo "data entered";
       }
       else{
        echo "not entered";
       }
    }
    else
    {
       $this->load->view('admin/register');
    }


  }

  public function login(){
   $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    if($this->form_validation->run('login'))
   { 
    // in this all data from form_validation 
    $data = $this->input->post();
    $username = $data['username'];
    $password = $data['password'];
    $this->load->model('model');
     $loginid = $this->model->login_data($username,$password);  
     if($loginid){
         $this->session->set_userdata('id',$loginid);
         //redirect to showquotes method of dmin controller..
         return redirect('admin/show_quotes');
     }
     else{
      echo "not login";
     }
   } 
   else{
    $this->load->view('Admin/login');
    //echo validation_errors();
    echo "login not successfull";
   }
  }

  public function show_quotes(){
    
  
   $this->load->model('model');
   $quote_data= $this->model->show_quotes_data();
   //to load the model data into html form..
    $this->load->view('Admin/view_quotes',['quote_data' => $quote_data]);


  }

  public function add_quotes(){

     $this->load->view('admin/add_quote_form');
     //to get view data
     if($this->form_validation->run('add_data'))
     {

       $post=$this->input->post();
       $this->load->model('model');
       if($this->model->add_quote_data($post))
         {     
              redirect('admin/show_quotes');
         }
         else{
             echo "no data";
         }
     }
     else {
      echo "Data Unable to data";
     }

  }

  public function delete_quote(){
    echo "delete functionality";
     $ids = $this->input->post('checked_id');
     print_r($ids);
          $this->load->model('model');
        $k =$this->model->delete_quote_data($ids);
        print_r($k);
}
/* public function find_quote(){
   $this->load->view('admin/quote_idform');
   $this->form_validation->set_rules('qid', 'qid', 'required');
   //to get the quote id
   if($this->form_validation->run())
   {
    $quote_id = $this->input->post('qid');
    print_r($quote_id);
    $this->load->model('model');
    //taken all the data of particular id
    $e =$this->model->find_quote($quote_id);
      print_r($e);
    if($e){
     $this->load->view('admin/update_form' , ['e' => $e]);
    
    }
    else {
      echo "d";
    }
    //redirect('admin/update_quote');
    }
    else {
      echo "id not found";
    }

 }
 
 public function update_quote()
 {
  echo "updat";
  //$this->load->view('admin/update_form');

 }*/
/*public function check_email_availability(){
  
   if(!filter_var($_POST["emailid"],FILTER_VALIDATE_EMAIL))
   {
    echo '<label class="text-danger"><span class= "ghyphicon ghyphicon-remove">Invalid</span></label>';
   }
   else{
    $this->load->model('model');
    if($this->model->is_email_availability($_POST["emailid"])){
      echo '<label class="text-danger"><span class= "ghyphicon ghyphicon-remove">valid</span></label>';
    }
   }

 } */
}
?>