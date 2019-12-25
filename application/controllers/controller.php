<?php defined('BASEPATH') or exit('No direct script access allowed');

class Divisi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('divisi_model','divisi');
    }

    public function index2()
    {
        $data['records'] = $this->divisi->find_all();
        $this->load->view('divisi/index', $data);
    }
    
    public function index(){
        $data = array();
        $limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? this->uri->segment(3) : 0;
        $total_records = $this->divisi->get_total();

        if($total_records>0){
            //get current page records
            $data["records"] = $this->divisi->pagination($limit_per_page,$start_index);
            $config['base_url'] = base_url() . 'divisi/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config['uri_segment'] = 3;
            $config['per_page'] = 1;
            $this->pagination->initialize($config);
            //build paging links
            $data['links'] = $this->pagination->create_links();
        }
        $this->load->view('divisi/index',$data);
    }
}

{
    public function tambah(){
        $this->load->view('divisi/tambah');
    }
    
    public function tambah_save(){
        $this->form_validation->set_rules('kode','Kode','required'); //kode dari form view
        $this->form_validation->set_rules('nama','Nama','required'); //kode dari form view
        
        if($this->form_validation->run()== FALSE){
            $this->load->view('divisi/tambah');
        }
        else{
            $data = array{
                'kodediv'=>$this->input->post('kode'),
                'namadiv'=>$this->input->post('nama')
            );
            $this->divisi->insert($data);
            redirect(base_url('/divisi'));
            }
        }
    }

    {
    public function edit(){
        $id=$this->uri->segment('3');
        $data = $this->divisi->find_by_id($id);
        $this->load->view('divisi/edit',$data);
    }

    public function edit_save(){
        $this->form_validation->set_rules('kode','Kode Divisi','required');
        $this->form_validation->set_rules('nama','Nama Divisi','required');
        if($this->form_validation->run()==FALSE;){
            $this->load->view('divisi/edit');
        }else{
            $data = array(
                'kodediv' => $this->input->post('kode'),
                'namadiv' => $this->input->post('nama')
            );
            $id = $this->input->post('divisiid'); //ambil dari form view edit.php
            $this->divisi->update($id,$data);
            redirect(base_url('/divisi'));
        }
    }
}

{
    public function hapus(){
        $id = $this->uri->segment('3');
        $this->diivisi->delete($id);
        redirect(base_url('/divisi'));
    }
}

{
    public function detail(){
        $id = $this->uri->segment('3');
        $data = $this->divisi->find_by_id($id);
        $this->load->view('divisi/detail',$data);
    }
}
}
?>