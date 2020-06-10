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
    
}

?>