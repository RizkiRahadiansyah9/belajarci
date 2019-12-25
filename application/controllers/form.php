<?php

class Form extends CI_Controller{
      
      function __construct(){
              parent::__construct(); 
              $this->load->library('form_validation');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
      }                                               
      
      function index(){
              $this->load->view('view_form');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
      }

      function aksi(){
              $this->form_validation->set_rules('nama','Nama','required');            
              $this->form_validation->set_rules('email','Email','required');
              $this->form_validation->set_rules('nim','NIM','required');
              $this->form_validation->set_rules('password','Password','required');              
              
              if($this->form_validation->run() != false){
                    echo "Form sudah terkirim :) ";
              }else{
                    $this->load->view('view_form');
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
      }
}