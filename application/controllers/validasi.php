<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class validasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('validasi_model');
    }

    public function index(){
        $data['booking'] = $this->validasi_model->getAll();
         $this->template->views('crud/validasi_booking', $data);
    }

}
?>
