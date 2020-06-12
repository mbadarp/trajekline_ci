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
        $where = array('id_paket' => $id_paket);
       $data['paket'] = $this->Home_model->get_detail($where, 'paket_tour')->result();
       $this->template_customer->views('detail_paket',$data);
    //    $this->load->view('paket_detail',$data);
    }
}

?>