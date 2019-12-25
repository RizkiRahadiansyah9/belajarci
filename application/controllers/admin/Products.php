<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Products extends CI_Controller{
     public function __construct(){
          parent::__construct();
          $this->load->model('m_product');
          $this->load->library('form_validation');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
     }                                            
     
     public function index(){
          $data["products"] = $this->m_product->getAll();
          $this->load->view("admin/product/list",$data);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
     }
}
