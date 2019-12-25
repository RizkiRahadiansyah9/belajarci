<?php defined('BASEPATH') or exit ('No direct script access allowed');

class Karyawan extends CI_Controller{
    
      function __construct(){
         parent::__construct();
         $this->load->model('karyawan_model','karyawan');
         $this->load->model('divisi_model','divisi');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
      }

      public function index(){
          $data['records'] = $this->karyawan->find_all();
          $this->load->view('karyawan/index',$data);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
      }
}