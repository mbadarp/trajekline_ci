<?php
class detailPaket extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('detailPaket_model');
        $this->load->library('template_customer');
        // $this->load->model('admin_model');
        // if($this->admin_model->isNotLogin()) redirect('login');
	}
	public function index (){
        $data['request'] = $this->detailPaket_model->getAll()->result();
        
        $this->template_customer->views('detail_paket',$data);
        
	}
	
	public function input(){
        $nama_paket = $this->input->post('nama_paket');
        $tgl_pesan = $this->input->post('tgl_pesan');
        $nama_wisata = $this->input->post('nama_wisata');
        $tgl_tour = $this->input->post('tgl_tour');
       
		$data = array(
                'nama_paket' => $nama_paket,
                'tgl_pesan' => $tgl_pesan,
                'nama_wisata' => $nama_wisata,
                'tgl_tour' => $tgl_tour,
               
		);
		$this->detailPaket_model->input_data($data,'tbl_pesan');
		redirect('detailPaket');
	}
	


}
?>