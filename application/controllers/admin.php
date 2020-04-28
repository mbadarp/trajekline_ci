<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }
    
    public function index(){
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
        $id = $this->input->post('id_admin');
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
}
?>