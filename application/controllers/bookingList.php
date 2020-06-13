<?php
class BookingList extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('BookingList_model');
        $this->load->library('template_customer');
        // $this->load->model('admin_model');
        // if($this->admin_model->isNotLogin()) redirect('login');
	}
	public function index (){
        $username = $this->session->userdata('session_customer');
        $data['user']= $this->BookingList_model->getCustomer($username);
        $data['pesanan'] = $this->BookingList_model->getPesanan($username)->result();
        // $this->load->view('admin/_template/head');
        // $this->load->view('form_request',$data);
        // $this->load->view('admin/_template/footer');
        $this->template_customer->views('booking_List',$data);
        
        }
        public function uploadBukti($id_pesan){
            $data['error'] = '';
            $data['result'] = $this->db->order_by('id_bukti','DESC')
                                        ->get('tbl_bukti')
                                        ->result();
                $data['paket'] = $this->db->get_where('tbl_pesan',['id_pesan' => $id_pesan])->result();
                
                $this->template_customer->views('uploadBukti',$data);
        }
        public function getEror(){
            $data['error'] = '';
            $data['result'] = $this->db->order_by('id','DESC')
                                        ->get('upload')
                                        ->result();
            $this->load->view('uploadBukti', $data);
        }
        public function Upload(){
            
                  //konfigurasi
        $config =[
                'upload_path' => './asset/img/buktibayar/',
                'allowed_types' => 'gif|jpg|png',
                'filename' => uniqid(),
                'overwrite' => true,
                'max_size' => 1024, 
                // 'max_width' => 1000,
                // 'max_height' => 1000
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))//jika gagal upload
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('uploadBukti',$error);
                
            }else
            //jika sukses upload
            {
                $_data = array('upload_data' => $this->upload->data());
                $data = array(
                   'id_pesan'=> $this->input->post('id_pesan'),
                   'file' => $_data['upload_data']['file_name']
                   );
               $query = $this->db->insert('tbl_bukti',$data);
               if($query){
                   echo 'berhasil di upload';
                   redirect('bookingList/index');
               }else{
                   echo 'gagal upload';
               }
            }
    }
    public function bookingFinish($id_pesan){
        $where = array('id_pesan' => $id_pesan);
        $data['pesan'] = $this->BookingList_model->getTiket($where)->result();
        $this->template_customer->views('cetak_tiket',$data);
    }
    
}
?>