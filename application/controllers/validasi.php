<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class validasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('validasi_model');
    }

    public function index(){
        $data['booking'] = $this->validasi_model->getAll();
         $this->template->views('crud/validasi_booking', $data);
    }

    public function hapus($id_pesan){
        $where = array('id_pesan' => $id_pesan);
        $this->validasi_model->hapus_data($where,'tbl_pesan');
        redirect('validasi/index');
    }

    public function edit($id_pesan){
        $where = array('id_pesan' => $id_pesan);
        $data['booking'] = $this->validasi_model->edit_data($where, 'tbl_pesan')->result();
        $this->template->views('crud/edit_validasi',$data);
    }

}
?>
