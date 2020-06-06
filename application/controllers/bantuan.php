<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bantuan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('bantuan_model');
        $this->load->model('admin_model');
        if($this->admin_model->isNotLogin()) redirect('login');
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
    
    public function profilview(){
        $data['profil'] = $this->bantuan_model->getProfil();
        $this->template_customer->views('profil', $data);   
    }
    public function syaratview(){
        $data['syarat'] = $this->bantuan_model->getSyarat();
        $this->template_customer->views('syarat', $data);   
    }
    public function pembayaranview(){
        $data['pembayaran'] = $this->bantuan_model->getCbayar();
        $this->template_customer->views('pembayaran', $data);   
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
            'kat_bantuan' => $kat_bantuan,
            'judul_bantuan' => $judul_bantuan,
            'konten_bantuan' => $konten_bantuan,
        );

        $this->bantuan_model->input_data($data, 'setup_bantuan');
        redirect('bantuan/profil');
    }

    public function edit_profil($id_bantuan){
        $where = array('id_bantuan' => $id_bantuan);
        $data['profil'] = $this->bantuan_model->edit_data($where, 'setup_bantuan')->result();
        $this->template->views('crud/edit_profil',$data);
    }

    public function update_profil(){
        $id_bantuan = $this->input->post('id_bantuan');
        $kat_bantuan = $this->input->post('kat_bantuan');
        $judul_bantuan = $this->input->post('judul_bantuan');
        $konten_bantuan = $this->input->post    ('konten_bantuan');

        $data = array(
            'kat_bantuan' => $kat_bantuan,
            'judul_bantuan' => $judul_bantuan,
            'konten_bantuan' => $konten_bantuan,
        );

        $where = array(
            'id_bantuan' => $id_bantuan
        );

        $this->bantuan_model->update_data($where,$data,'setup_bantuan');
        redirect('bantuan/profil');
    }
    public function tambah_profil(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_profil');
    }

    public function input_syarat(){
        $kat_bantuan = $this->input->post('kat_bantuan');
        $judul_bantuan = $this->input->post('judul_bantuan');
        $konten_bantuan = $this->input->post('konten_bantuan');

        $data = array(
            'kat_bantuan' => $kat_bantuan,
            'judul_bantuan' => $judul_bantuan,
            'konten_bantuan' => $konten_bantuan,
        );

        $this->bantuan_model->input_data($data, 'setup_bantuan');
        redirect('bantuan/syarat');
    }

    public function edit_syarat($id_bantuan){
        $where = array('id_bantuan' => $id_bantuan);
        $data['syarat'] = $this->bantuan_model->edit_data($where, 'setup_bantuan')->result();
        $this->template->views('crud/edit_syarat',$data);
    }

    public function update_syarat(){
        $id_bantuan = $this->input->post('id_bantuan');
        $kat_bantuan = $this->input->post('kat_bantuan');
        $judul_bantuan = $this->input->post('judul_bantuan');
        $konten_bantuan = $this->input->post    ('konten_bantuan');

        $data = array(
            'kat_bantuan' => $kat_bantuan,
            'judul_bantuan' => $judul_bantuan,
            'konten_bantuan' => $konten_bantuan,
        );

        $where = array(
            'id_bantuan' => $id_bantuan
        );

        $this->bantuan_model->update_data($where,$data,'setup_bantuan');
        redirect('bantuan/syarat');
    }
    public function tambah_syarat(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_syarat');
    }

    public function input_cbayar(){
        $kat_bantuan = $this->input->post('kat_bantuan');
        $judul_bantuan = $this->input->post('judul_bantuan');
        $konten_bantuan = $this->input->post('konten_bantuan');

        $data = array(
            'kat_bantuan' => $kat_bantuan,
            'judul_bantuan' => $judul_bantuan,
            'konten_bantuan' => $konten_bantuan,
        );

        $this->bantuan_model->input_data($data, 'setup_bantuan');
        redirect('bantuan/pembayaran');
    }

    public function edit_cbayar($id_bantuan){
        $where = array('id_bantuan' => $id_bantuan);
        $data['pembayaran'] = $this->bantuan_model->edit_data($where, 'setup_bantuan')->result();
        $this->template->views('crud/edit_pembayaran',$data);
    }

    public function update_cbayar(){
        $id_bantuan = $this->input->post('id_bantuan');
        $kat_bantuan = $this->input->post('kat_bantuan');
        $judul_bantuan = $this->input->post('judul_bantuan');
        $konten_bantuan = $this->input->post    ('konten_bantuan');

        $data = array(
            'kat_bantuan' => $kat_bantuan,
            'judul_bantuan' => $judul_bantuan,
            'konten_bantuan' => $konten_bantuan,
        );

        $where = array(
            'id_bantuan' => $id_bantuan
        );

        $this->bantuan_model->update_data($where,$data,'setup_bantuan');
        redirect('bantuan/pembayaran');
    }
    public function tambah_cbayar(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_pembayaran');
    }

}
?>