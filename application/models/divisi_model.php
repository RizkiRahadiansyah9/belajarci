<?php
class Divisi_model extends CI_Model
{
     public $table = 'divisi';

     public function __construct()
     {
          parent::__construct();
     }

     public function find_all()
     {
          return $this->db->get($this->table)->result_array();
     }

     public function insert($data){
          return $this->db->insert($this->table,$data);
     }

     public function update($id,$data){
          $this->db->where('divisiid',$id); //divisiid ambil dari field tabel
          return $this->db->update($this->table,$data);
     }

     public function delete($id){
          $this>db->where('divisiid',$id);
          return $this->db->delete($this->table);
     }

     public function find_by_id($id){
          return $this->db->get_where($this->table, ['divisiid'=> $id])->row_array();
     }

     public function pagination($limit,$start){
          $this->db->limit($limit,$start);
          $result = $this->db->get($this->table)->result_array();
          if(count($result) > 0){
               return $result;
          }
          return false;
     }
}
