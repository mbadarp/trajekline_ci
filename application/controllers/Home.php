<?php
class Home extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('Home_model');
        $this->load->library('template_customer');
    }
        
    public function index (){
        $data['paket']= $this->Home_model->getAll()->result();
        $this->template_customer->views('Home_view', $data);
       
    }
    public function detail_paket($id_paket){
        $this->load->model('customer_model');
        $where = array('id_paket' => $id_paket);
        $username = $this->session->userdata('session_customer');
        $data['profil'] = $this->customer_model->getProfil($username)->result();
       $data['paket'] = $this->Home_model->get_detail($where, 'paket_tour')->result();
       $this->template_customer->views('detail_paket',$data);
    //    $this->load->view('paket_detail',$data);
    }
    public function booking(){
        $id = $this->input->post('id');
        $id_paket = $this->input->post('id_paket');
        $tgl_pesan = $this->input->post('tgl_pesan');
        $tgl_tour = $this->input->post('tgl_tour');

        $data = array(
            'id'=> $id,
            'id_paket' => $id_paket,
            'tgl_pesan' => $tgl_pesan,
            'tgl_tour' => $tgl_tour,
            'status' => 'S1'
        );
        $this->Home_model->input_data($data, 'tbl_pesan');
        redirect('bookingList/index');
    }
    
}

?>