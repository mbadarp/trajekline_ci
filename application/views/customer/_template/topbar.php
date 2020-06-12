<!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="<?php echo base_url('home/index/#home'); ?>"><img src="#img" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url('home/index/#home'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('home/index/#wisata'); ?>">Paket Tour</a></li>
          
            <li class="menu-has-children"><a href="">Bantuan</a>
            <ul>
            <li><a href="<?php echo base_url('bantuan/profil_c'); ?>">Profil Trajekline</a></li>
              <li><a href="<?php echo base_url('bantuan/syarat_c'); ?>">Ketentuan & Persyaratan</a></li>
              <li><a href="<?php echo base_url('bantuan/pembayaran_c'); ?>">Cara Pembayaran</a></li>
              <li><a href="#contact">Hubungi Kami</a></li>
            </ul>
          </li>
          <?php 
          // session_start();
          if($this->session->userdata("session_customer")){

          
          // if(isset($_SESSION['username'])){
 
	        ?>
			
			
        <li class="menu-active"><a href="profil.php" >Selamat datang, <?php echo $this->session->userdata("session_customer"); ?></a></li>
        <li ><a  class="dropdown-toggle icon-cog"  href="#">&#8801;</a>
            <ul>
              <li><a href="<?php echo base_url('customer/profil'); ?>">Profil</a></li>
              <li><a href="<?php echo base_url('bookingList'); ?>">Booking List</a></li>
              <li><a href="<?php echo base_url('customer/logout'); ?>">Keluar</a></li>
            </ul>
          </li>
        <?php
	         }else{
	      ?>
				<li class="menu-has-children"><a href="">Register</a>
            <ul>
              <li><a href="<?php echo base_url('customer/login'); ?>">Login</a></li>
              <li><a href="<?php echo base_url('customer/register'); ?>">Daftar</a></li>
            </ul>
	<?php
	}
	?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><!-- #header -->