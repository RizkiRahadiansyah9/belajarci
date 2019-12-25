<?php
class Karyawan_model extends CI_Model{

    public $table = 'karyawan';

    public function __construct(){
         parent::__construct();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    }

    public function find_all(){
         return $this->db->query("SELECT karyawan.*,divisi.namadiv as namadivisi
         FROM karyawan INNER JOIN divisi ON karyawan.divisiid = divisi.divisiid") ->result_array();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    }
}