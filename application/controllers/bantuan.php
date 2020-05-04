<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bantuan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('bantuan_model');
    }
    
    public function profil(){
        $data['profil'] = $this->bantuan_model->getProfil();
         $this->template->views('crud/setup_profil', $data);
    }

    public function syarat(){
        $data['syarat'] = $this->bantuan_model->getSyarat();
         $this->template->views('crud/setup_syarat', $data);
    }

    public function pembayaran(){
        $data['pembayaran'] = $this->bantuan_model->getCbayar();
         $this->template->views('crud/setup_pembayaran', $data);
    }
    public function hapusprofil($id_bantuan){
        $where = array('id_bantuan' => $id_bantuan);
        $this->bantuan_model->hapus_data($where,'setup_bantuan');
        redirect('bantuan/profil');
    }

    public function hapussyarat($id_bantuan){
        $where = array('id_bantuan' => $id_bantuan);
        $this->bantuan_model->hapus_data($where,'setup_bantuan');
        redirect('bantuan/syarat');
    }

    public function hapuspembayaran($id_bantuan){
        $where = array('id_bantuan' => $id_bantuan);
        $this->bantuan_model->hapus_data($where,'setup_bantuan');
        redirect('bantuan/pembayaran');
    }
    
    public function input_profil(){
        $kat_bantuan = $this->input->post('kat_bantuan');
        $judul_bantuan = $this->input->post('judul_bantuan');
        $konten_bantuan = $this->input->post('konten_bantuan');

        $data = array(
            'profil' => $kat_bantuan,
            'judul_bantuan' => $judul_bantuan,
            'konten_bantuan' => $konten_bantuan,
        );

        $this->bantuan_model->input_data($data, 'setup_bantuan');
        redirect('bantuan/profil');
    }
    public function tambah_profil(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_profil');
    }

}
?>