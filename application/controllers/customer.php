<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class customer extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->model('admin_model');
        
    }
    
    public function index(){
        if($this->admin_model->isNotLogin()) redirect('login');
        $data['user'] = $this->customer_model->getAll()->result();
         $this->template->views('crud/data_customer', $data);
    }
    public function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->customer_model->edit_data($where, 'login_user')->result();
        $this->template->views('crud/edit_customer',$data);
    }
    public function hapus($id){
        $where = array('id' => $id);
        $this->customer_model->hapus_data($where,'login_user');
        redirect('customer/index');
    }
    
    public function update(){
        $id = $this->input->post('id');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $email = $this->input->post('email');
        $tipe_identitas = $this->input->post('tipe_identitas');
        $no_identitas = $this->input->post('no_identitas');
        $no_telepon = $this->input->post('no_telepon');
        $no_rek = $this->input->post('no_rek');
        $nama_rek = $this->input->post('nama_rek');
        $alamat = $this->input->post('alamat');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'email' => $email,
            'tipe_identitas' => $tipe_identitas,
            'no_identias' => $no_identitas,
            'no_telepon' => $no_telepon,
            'no_rek' => $no_rek,
            'nama_rek' => $nama_rek,
            'alamat' => $alamat,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );

        $where = array(
            'id' => $id
        );

        $this->customer_model->update_data($where,$data,'login_user');
        redirect('customer');
    }
    public function register(){
        $this->load->view('customer/_template/head');
        $this->load->view('customer/_template/topbar');
        $this->load->view('customer/_template/js');
        $this->load->view('register');
        $this->load->view('customer/_template/footer');
    }
    public function proses_regis(){
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $email = $this->input->post('email');
        $no_telepon = $this->input->post('no_telepon');
        $alamat = $this->input->post('alamat');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'email' => $email,
            'no_telepon' => $no_telepon,    
            'alamat' => $alamat,
            'username' => $username,
            'password' => $password,
            'level' => 'customer'
        );


        $this->customer_model->input_data($data, 'login_user');
        redirect('customer/login?pesan=berhasil');
    }
    public function profil(){
        $username = $this->session->userdata('session_customer');
        // $data['user']= $this->customer_model->getUser($username);
        $data['profil'] = $this->customer_model->getProfil(); 
        $this->load->view('customer/_template/head');
        $this->load->view('customer/_template/topbar');
        $this->load->view('customer/_template/js');
        $this->load->view('profil', $data);
        $this->load->view('customer/_template/footer');
    }
    public function edit_profil(){
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $email = $this->input->post('email');
        $tipe_identitas = $this->input->post('tipe_identitas');
        $no_identitas = $this->input->post('no_identitas');
        $no_telepon = $this->input->post('no_telepon');
        $no_rek = $this->input->post('no_rek');
        $nama_rek = $this->input->post('nama_rek');
        $alamat = $this->input->post('alamat');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'email' => $email,
            'tipe_identitas' => $tipe_identitas,
            'no_identias' => $no_identitas,
            'no_telepon' => $no_telepon,
            'no_rek' => $no_rek,
            'nama_rek' => $nama_rek,
            'alamat' => $alamat,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );


        $this->customer_model->input_data($data, 'login_user');
        redirect('customer/login?pesan=berhasil');
    }
    public function tambah(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_customer');
    }

    //LOGIN
    public function login(){
        $this->load->view('customer/_template/head');
        $this->load->view('customer/_template/topbar');
        $this->load->view('customer/_template/js');
        $this->load->view('login_customer');
        $this->load->view('customer/_template/footer');
    }

    public function cek_log(){
        $username = $this->input->post('txt_user');
        $password = $this->input->post('txt_pass');
        $cek = $this->customer_model->login($username,$password,'login_user')->result();
        if($cek != FALSE){
            foreach ($cek as $row){
                $user = $row->username;
                $level = $row->level;
            }
            $this->session->set_userdata('session_customer',$user);
            $this->session->set_userdata('session_level',$level);
            redirect('home');
        }else{
            redirect(base_url('customer/login?pesan=gagal'));
            // $this->load->view('customer/_template/head');
            // $this->load->view('customer/_template/topbar');
            // $this->load->view('customer/_template/js');
            // $this->load->view('login_customer');
            // $this->load->view('customer/_template/footer');
           
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('home'));
    }


}
?>