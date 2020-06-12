<section id="home" class="masthead text-white text-center">
  <div class="home-container" >
    
  <div class="overlay"></div>
  <h3>Selamat Datang Di Trajekline!</h3>
  <?php 
	if($this->input->get("pesan")){
		if($this->input->get("pesan")=="gagal"){
			echo "<div class='alert'>Username atau Password tidak sesuai !</div>";
		}else{
            echo "<div class='alert'>Akun Anda Berhasil Dibuat Silahkan Login !</div>";
        }
	}
	?>
  <?php  if($this->session->userdata("session_customer")){
  header(base_url('home'));
  ?>
  <div class=row>
  <?php } ?>
  <form action="<?php echo base_url('customer/cek_log'); ?>" method="POST" class="user" id="login">
  <div class="form-group">
  <input name="txt_user" type="text" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Masukkan Username...">
  </div>
  <div class="form-group">
      <input name="txt_pass" type="password" class="form-control form-control-user" id="exampleInputPassword"           placeholder="Password">
  </div>
      <input name="submit_login" type="submit" value="Login" class="btn btn-primary btn-user btn-block">
       <hr>
  <div class="text-center">
     <a class="small" href="#">Lupa Password?</a>
 </div>
 <div class="text-center">
    <a class="small" href="<?php echo base_url('customer/register'); ?>">Buat Akun!</a>
  </div>
  </form>
  
  </div>
  </div>






  </section>
