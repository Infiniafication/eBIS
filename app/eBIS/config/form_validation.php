<?php
$config = array(
   'contact_us/index' => array(
                     array(
                        'field' => 'f_name',
                        'label' => 'First Name',
                        'rules' => 'trim|required'
                        ),
                     array(
                        'field' => 'l_name',
                        'label' => 'Last Name',
                        'rules' => 'trim|required'
                        ),
                     array(
                        'field' => 'phone_num',
                        'label' => 'Contact Number',
                        'rules' => 'trim|required'
                        ),
                     array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email'
                        ),
                     array(
                        'field' => 'subject',
                        'label' => 'Subject',
                        'rules' => 'required|xss_clean'
                        ),
                     array(
                        'field' => 'message',
                        'label' => 'Message',
                        'rules' => 'required'
                        )
                  )
      );