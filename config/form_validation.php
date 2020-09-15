<?php 
$config=[

       'signup'=>[
                        [
                          'field' => 'username',
                          'label' => 'Username',
                          'rules' => 'required|is_unique[registration.username]'
                        ],
                        [
                          'field' => 'password',
                          'label' => 'Password',
                          'rules' => 'required'
                        ],
                     
                        [
                          'field' => 'emailid',
                          'label' => 'Email Confirmation',
                          'rules' => 'required|valid_email'
                        ]
                ],
        'login'=>[
                        [
                          'field' => 'username',
                          'label' => 'Username',
                          'rules' => 'required'
                        ],
                        [
                          'field' => 'password',
                          'label' => 'Password',
                          'rules' => 'required'
                        ]
                ],        
        'add_data'=>[
                        [
                          'field' => 'qname',
                          'label' => 'Quote Name',
                          'rules' => 'required'
                        ],
                        [
                          'field' => 'qdata',
                          'label' => 'Quote Data',
                          'rules' => 'required'
                        ]
                ],        
      

                
];
?>