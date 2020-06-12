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
            'filename' => uniqid(),
            'overwrite' => true,
            'max_size' => 1024, 
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto'))//jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('uploadBukti',$error);
            
        }else
        //jika sukses upload
        {
            $_data = array('upload_data' => $this->upload->data());
            $data = array(
            'nama_paket'=> $this->input->post('nama_paket'),
            'nama_wisata'=> $this->input->post('nama_wisata'),
            'harga'=> $this->input->post('harga'),
            'fasilitas'=> $this->input->post('fasilitas'),
            'deskripsi'=> $this->input->post('deskripsi'),
            'kategori'=> $this->input->post('kategori'),
            'foto' => $_data['upload_data']['file_name']
            );
            $query = $this->db->insert('paket_tour',$data);
            if($query){
                echo 'berhasil di upload';
                redirect('admin/getPaket');
            }else{
                echo 'gagal upload';
            }
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