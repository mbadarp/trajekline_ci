<?php
class Profil extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('Profil_model');
        $this->load->library('template_customer');
    }
        
    public function index (){
        $data['login_user']= $this->Profil_model->getAll()->result();
        $this->template_customer->views('Profil', $data);
       
    }
    
}

?>