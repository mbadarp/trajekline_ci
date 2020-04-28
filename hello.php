<?php
/**
*  
*/
class hello extends CI_Controller
{
	
	public function index()
	{
	
	//memuat model "hello_model"
	$this->load->model('hello_model');

	//mengambil objek dari class hello_model dan dimuat di var model
	$model=$this->hello_model;

	//mengambil multiple data dari model dan menyimpan ke variabel a dan b
	$a=$model->txt1;
	$b=$model->txt2;

	//membuat variabel data yang akan dikirim ke view
	$data=['teks1'=>$a,'teks2'=>$b ];

	//memanggil view "helloview" dan mengirim variabel data
	$this->load->view('helloview',$data);//fileview
	}
}
?>