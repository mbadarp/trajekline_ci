<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        if($this->admin_model->isNotLogin()) redirect('login');
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['user'] = $this->admin_model->getAll()->result();
         $this->template->views('crud/data_admin', $data);
    }
    public function edit($id_admin){
        $where = array('id_admin' => $id_admin);
        $data['user'] = $this->admin_model->edit_data($where, 'login_admin')->result();
        $this->template->views('crud/edit_admin',$data);
    }
    public function hapus($id_admin){
        $where = array('id_admin' => $id_admin);
        $this->admin_model->hapus_data($where,'login_admin');
        redirect('admin/index');
    }
    
    public function update(){
        $id_admin = $this->input->post('id_admin');
        $nama_admin = $this->input->post('nama_admin');
        $user_admin = $this->input->post('user_admin');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $level = $this->input->post('level');

        $data = array(
            'nama_admin' => $nama_admin,
            'user_admin' => $user_admin,
            'password' => $password,
            'email' => $email,
            'level' => $level
        );

        $where = array(
            'id_admin' => $id_admin
        );

        $this->admin_model->update_data($where,$data,'login_admin');
        redirect('admin');
    }
    public function input(){
        $nama_admin = $this->input->post('nama_admin');
        $user_admin = $this->input->post('user_admin');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $level = $this->input->post('level');

        $data = array(
            'nama_admin' => $nama_admin,
            'user_admin' => $user_admin,
            'password' => $password,
            'email' => $email,
            'level' => $level
        );

        $this->admin_model->input_data($data, 'login_admin');
        redirect('admin/index');
    }
    public function tambah(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_admin');
    }

    //PAKET TOUR
    public function getPaket(){
        $this->load->model('admin_model');
        $data['paket'] = $this->admin_model->getPaketById()->result();
         $this->template->views('crud/data_paket', $data);
    }
    
    public function input_paket(){
        //konfigurasi
        $config =[
            'upload_path' => './asset/img/destinasi/',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 1000, 'max_width' => 1000,
            'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload())//jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('crud/tambah_paket',$error);
            
        }else
        //jika sukses upload
        {
            $file = $this->upload->data();
            //mengambil data diform
            $data = ['foto' => $file['file_name'],
            'nama_paket' => set_value('nama_paket'),
            'nama_wisata' => set_value('nama_wisata'),
            'harga' => set_value('harga'),
            'fasilitas' => set_value('fasilitas'),
            'deskripsi' => set_value('deskripsi'),
            'kategori' => set_value('kategori')
        ];
        $this->admin_model->input_paket($data);
        redirect('admin/getPaket');
        }
    }
    public function tambah_paket(){
        $this->template->views('crud/tambah_paket');
    }   

    public function v_booking(){
        $this->load->model('validasi_model');
        $data['booking'] = $this->validasi_model->getBooking();
        $data['bukti'] = $this->validasi_model->getBukti();
        $this->template->views('crud/home_admin', $data);
    }
    


}
?>