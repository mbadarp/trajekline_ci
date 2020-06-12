<?php
class bookingList extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('bookingList_model');
        $this->load->library('template_customer');
        // $this->load->model('admin_model');
        // if($this->admin_model->isNotLogin()) redirect('login');
	}
	public function index (){
        $username = $this->session->userdata('session_customer');
        $data['user']= $this->bookingList_model->getCustomer($username);
        $data['pesanan'] = $this->bookingList_model->getPesanan($username)->result();
        // $this->load->view('admin/_template/head');
        // $this->load->view('form_request',$data);
        // $this->load->view('admin/_template/footer');
        $this->template_customer->views('booking_List',$data);
        
	}

        

}
?>