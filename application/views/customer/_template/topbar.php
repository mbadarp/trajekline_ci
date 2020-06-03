<!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#home"><img src="#img" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#home">Home</a></li>
          <li><a href="#wisata">Paket Tour</a></li>
          
            <li class="menu-has-children"><a href="">Bantuan</a>
            <ul>
            <li><a href="aboutus.php?post=profil">Profil Trajekline</a></li>
              <li><a href="aboutus.php?post=syarat">Ketentuan & Persyaratan</a></li>
              <li><a href="aboutus.php?post=pembayaran">Cara Pembayaran</a></li>
              <li><a href="#contact">Hubungi Kami</a></li>
            </ul>
          </li>
          <?php 
          // session_start();
          
          // if(isset($_SESSION['username'])){
 
	        ?>
			
			
        <li class="menu-active"><a href="profil.php" >Selamat datang, <?php //echo "$_SESSION[username]"; ?></a></li>
        <li ><a  class="dropdown-toggle icon-cog"  href="#">&#8801;</a>
            <ul>
              <li><a href="profil.php">Profil</a></li>
              <li><a href="bookingList.php">Booking List</a></li>
              <li><a href="logout.php">Keluar</a></li>
            </ul>
          </li>
        <?php
	        // }else{
	      ?>
				<li class="menu-has-children"><a href="">Register</a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Daftar</a></li>
            </ul>
	<?php
	// }
	?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><!-- #header -->