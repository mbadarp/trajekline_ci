<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class saran extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('saran_model');
       
    }
    
    public function index(){
        $this->load->model('admin_model');
        if($this->admin_model->isNotLogin()) redirect('login');
        $data['saran'] = $this->saran_model->getAll()->result();
         $this->template->views('crud/data_saran', $data);
    }
    public function hapus($id_saran){
        $where = array('id_saran' => $id_saran);
        $this->saran_model->hapus_data($where,'tbl_saran');
        redirect('saran/index');
    }
    
    public function input(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $subjek = $this->input->post('subjek');
        $saran_masukan = $this->input->post('saran_masukan');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'subjek' => $subjek,
            'saran_masukan' => $saran_masukan,
        );

        $this->saran_model->input_data($data, 'tbl_saran');
        redirect('home/index/#contact');
    }
    public function tambah(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_saran');
    }

}
?>