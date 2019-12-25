<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class M_product extends CI_Model{
   private $_table = "products";
   //nama kolom di tabel, harus sama penulisan nya
   public $produt_id;
   public $name;
   public $price;
   public $image = "default.png";
   public $description;
   
   public function rules(){ // method rules utk validasi input
         return[
             ['field' => 'name',
              'label' => 'Name',
              'rules' => 'required'],
              
              ['field' => 'price',
              'label' => 'Price',
              'rules' => 'required'],

              ['field' => 'description',
              'label' => 'Description',
              'rules' => 'required'],
         ];
   }

    public function getAll(){
          return $this->db->get($this->_table)->result();
          //result : fungsi untuk mengambil semua data hasil query
          /*
          ini sama artinya dgn SELECT * FROM products
          method ini akan mengembalikan sebuah array 
          yang berisi objek dari row
          */                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    }

    public function getbyId($id){
          return $this->db->get_where($this->_table,["product_id" => $id])->row();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    }
}