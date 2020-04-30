<?php
class request extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('request_model');
		$this->load->library('template_customer');
	}
	public function index (){
		$data['request'] = $this->request_model->getAll()->result();
		$this->template_customer->views('form_request',$data);
	}
	//public function tambah(){
		//$data['grup']=$this->Mahasiswa_model->getGrup();
		//$this->template->views('form_request',$data);
	//}
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
                'status' => $status
		);
		$this->request_model->input_data($data,'data_request');
		redirect('request');
	}

/*	<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script> */

	//public function edit($id){
		//$where = array('id'=>$id);
		//$data['grup']=$this->Mahasiswa_model->getGrup();
		//$data['user'] = $this->Mahasiswa_model->edit_data($where,'tm_user')->result();
		//$this->template->views('crud/edit_mahasiswa',$data);
	//}
	//public function update(){
		//$id = $this->input->post('id');
		//$username = $this->input->post('username');
		//$password = $this->input->post('password');
		//$nama = $this->input->post('nama');
		//$grup = $this->input->post('grup');
		//$data = array(
			//'username' => $username,
			//'password' => $password,
			//'nama' => $nama,
			//'grup' => $grup
		//);
		//$where = array('id'=>$id);
		//$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		//redirect('Mahasiswa');
	//}
	//public function hapus($id){
		//$where = array('id'=>$id);
		//$this->Mahasiswa_model->hapus_data($where, 'tm_user');
		//redirect('Mahasiswa/index');
	//}

	//public function Api(){
		//$data = $this->Mahasiswa_model->getAll();
		//echo json_encode($data->result_array());
	//}
	//public function ApiInsert(){
		//$username = $this->input->post('username');
		//$password = $this->input->post('password');
		//$nama = $this->input->post('nama');
		//$grup = $this->input->post('grup');
		//$data = array(
			//'username' => $username,
			//'password' => $password,
			//'nama' => $nama,
			//'grup' => $grup
		//);
		//$this->Mahasiswa_model->input_data($data, 'tm_user');
		//echo json_encode($array);
	//}
	//public function ApiDelete(){
		//if($this->input->post('username')){
			//$where = array('username' => $this->input->post('username'));
			//if($this->Mahasiswa_model->hapus_data($where, 'tm_user')){
				//$array = array('success' => true);
			//}else{
				//$array = array('error' => true);
			//}
			//echo json_encode($array);
		//}
	//}
	//public function ApiUpdate(){
		//$username = $this->input->post('username');
		//$password = $this->input->post('password');
		//$nama = $this->input->post('nama');
		//$grup = $this->input->post('grup');
		//$cek = $this->Mahasiswa_model->getGrup();
		//foreach($cek as $row){
			//if($grup == $row->grup){
				//$grup = $row->id_grup;
			//}
		//}
		//$data = array(
			//'username' => $username,
			//'password' => $password,
			//'nama' => $nama,
			//'grup' => $grup
		//);
		//$where = array('username' => $username);
		//$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
		//echo json_encode($array);
	//}
}
?>