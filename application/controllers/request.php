<?php
class Request extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('Request_model');
        $this->load->library('template_customer');
        // $this->load->model('admin_model');
        // if($this->admin_model->isNotLogin()) redirect('login');
	}
	public function index (){
        $data['request'] = $this->Request_model->getAll()->result();
        // $this->load->view('admin/_template/head');
        // $this->load->view('form_request',$data);
        // $this->load->view('admin/_template/footer');
        $this->template_customer->views('form_request',$data);
        
	}
	public function dtrequest(){
		$data['request'] = $this->Request_model->getAll()->result();
		$this->template->views('crud/data_request',$data);
	}
	//public function tambah(){
		//$data['grup']=$this->Mahasiswa_model->getGrup();
		//$this->template->views('form_request',$data);
    //}
    
    public function ApiInsert(){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $kota_tujuan = $this->input->post('kota_tujuan');
        $jumlah_orang = $this->input->post('jumlah_orang');
        $lama_hari = $this->input->post('lama_hari');
        $tgl_berangkat = $this->input->post('tgl_berangkat');	
        $tujuan_wisata = $this->input->post('tujuan_wisata');
        $tiket = $this->input->post('tiket');
        $penginapan = $this->input->post('penginapan');
        $fasilitas = $this->input->post('fasilitas');
       
		$data = array(
				'nama_lengkap' => $nama_lengkap,
				'email' => $email,
				'kota_tujuan' => $kota_tujuan,
                'jumlah_orang' => $jumlah_orang,
                'lama_hari' => $lama_hari,
                'tgl_berangkat' => $tgl_berangkat,
                'tujuan_wisata' => $tujuan_wisata,
                'tiket' => $tiket,
                'penginapan' => $penginapan,
                'fasilitas' => $fasilitas,
               
		);
		$this->Request_model->input_data($data,'data_request');
		redirect('request');
	}

	public function input(){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $kota_tujuan = $this->input->post('kota_tujuan');
        $jumlah_orang = $this->input->post('jumlah_orang');
        $lama_hari = $this->input->post('lama_hari');
        $tgl_berangkat = $this->input->post('tgl_berangkat');	
        $tujuan_wisata = $this->input->post('tujuan_wisata');
        $tiket = $this->input->post('tiket');
        $penginapan = $this->input->post('penginapan');
        $fasilitas = $this->input->post('fasilitas');
       
		$data = array(
				'nama_lengkap' => $nama_lengkap,
				'email' => $email,
				'kota_tujuan' => $kota_tujuan,
                'jumlah_orang' => $jumlah_orang,
                'lama_hari' => $lama_hari,
                'tgl_berangkat' => $tgl_berangkat,
                'tujuan_wisata' => $tujuan_wisata,
                'tiket' => $tiket,
                'penginapan' => $penginapan,
                'fasilitas' => $fasilitas,
               
		);
		$this->Request_model->input_data($data,'data_request');
		redirect('request');
	}
	public function hapus($id_request){
		$where = array('id_request' => $id_request);
        $this->Request_model->hapus_data($where,'data_request');
        redirect('request/dtrequest');
	}
	public function edit($id_request){
        $where = array('id_request' => $id_request);
        $data['request'] = $this->Request_model->edit_data($where, 'data_request')->result();
        $this->template->views('crud/edit_request',$data);
	}
	public function update(){
        $id_request = $this->input->post('id_request');
		$nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $kota_tujuan = $this->input->post('kota_tujuan');
        $jumlah_orang = $this->input->post('jumlah_orang');
        $lama_hari = $this->input->post('lama_hari');
        $tgl_berangkat = $this->input->post('tgl_berangkat');	
        $tujuan_wisata = $this->input->post('tujuan_wisata');
        $tiket = $this->input->post('tiket');
        $penginapan = $this->input->post('penginapan');
        $fasilitas = $this->input->post('fasilitas');
        $status = $this->input->post('status');
		$data = array(
				'nama_lengkap' => $nama_lengkap,
				'email' => $email,
				'kota_tujuan' => $kota_tujuan,
                'jumlah_orang' => $jumlah_orang,
                'lama_hari' => $lama_hari,
                'tgl_berangkat' => $tgl_berangkat,
                'tujuan_wisata' => $tujuan_wisata,
                'tiket' => $tiket,
                'penginapan' => $penginapan,
				'fasilitas' => $fasilitas,
				'status' => $status,
               
		);

        $where = array(
            'id_request' => $id_request
        );

        $this->Request_model->update_data($where,$data,'data_request');
        redirect('request/dtrequest');
    }

    public function ApiRequest(){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $kota_tujuan = $this->input->post('kota_tujuan');
        $jumlah_orang = $this->input->post('jumlah_orang');
        $lama_hari = $this->input->post('lama_hari');
        $tgl_berangkat = $this->input->post('tgl_berangkat');	
        $tujuan_wisata = $this->input->post('tujuan_wisata');
        $tiket = $this->input->post('tiket');
        $penginapan = $this->input->post('penginapan');
        $fasilitas = $this->input->post('fasilitas');
       
		$data = array(
				'nama_lengkap' => $nama_lengkap,
				'email' => $email,
				'kota_tujuan' => $kota_tujuan,
                'jumlah_orang' => $jumlah_orang,
                'lama_hari' => $lama_hari,
                'tgl_berangkat' => $tgl_berangkat,
                'tujuan_wisata' => $tujuan_wisata,
                'tiket' => $tiket,
                'penginapan' => $penginapan,
                'fasilitas' => $fasilitas,
               
		);
        $this->Request_model->input_data($data,'data_request');
        echo json_encode($array);
    }



}
?>