<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Blog extends CI_Controller{  
    function __construtct()
    { 
           parent::__construtct();
    }
    function index(){
       $data['judul'] = "Judul Blog";
       $data['isi'] = "Isi Blog";
       $this->load->view('blog_view',$data);
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                

}