<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
  function __construct(){
     parent::__construct();
     $this->load->model('m_user'); // memeanggil model m_usr                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
  }              

  function user(){
     $data['user']= $this->m_user->get_data()->result(); //memanggil fungsi get_data pada model m_user,
     $this->load->view('v_user.php',$data); 
   }
}