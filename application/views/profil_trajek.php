<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Trajekline-Jember</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Corousel JS-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
     /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  
  .checked {
      color: orange;
  }
  </style>
</head>

<body>

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
          <li class="menu-active"><a href="index.php #home">Home</a></li>
          <li><a href="index.php #wisata">Paket Tour</a></li>
          
            <li class="menu-has-children"><a href="">Bantuan</a>
            <ul>
            <li><a href="aboutus.php?post=profil">Profil Trajekline</a></li>
              <li><a href="aboutus.php?post=syarat">Ketentuan & Persyaratan</a></li>
              <li><a href="aboutus.php?post=pembayaran">Cara Pembayaran</a></li>
              <li><a href="#contact">Hubungi Kami</a></li>
            </ul>
          </li>
          <?php session_start();

            if(isset($_SESSION['username'])){
               
          ?>
      
      
        <li class="menu-active"><a href="profil.php" >Selamat datang, <?php echo "$_SESSION[username]"; ?></a></li>
        <li ><a  class="dropdown-toggle icon-cog" href="#"></a>
            <ul>
              <li><a href="profil.php">Profil</a></li>
              <li><a href="bookingList.php">Booking List</a></li>
              <li><a href="logout.php">Keluar</a></li>
            </ul>
          </li>
        <?php
          }else{
        ?>
        <li class="menu-has-children"><a href="">Register</a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Daftar</a></li>
            </ul>
  <?php
  }
  ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><!-- #header -->
  <!--==========================
    Bantuan
  ============================-->
  <section id="bantuan">
  <div class="">
    <div class="row" style="background: url(asset/img/d-bromo2.jpg) top left no-repeat; background-size: cover; height:340px ;">
        <div class="container" style="padding: 40px 20px">
            <h1 class="fg-white place-right" >Welcome to<br /> Trajekline Tour and Travel</h1>
            <h4 class="fg-white place-right">
                Selamat datang di Website kami, kenyamanan anda adalah kepuasan kami
            </h4>
        </div>
    </div>
</div>

  <div class="container" id="infobantuan">
        <div class="grid fluid">
            <div class="border padding20">
        <?php
          if($_GET['post']=='profil'){
            $is="Profil TRAJEKLINE Tour and Travel";
          }else if($_GET['post']=='syarat'){
            $is="Syarat dan Ketentuan";
          }else if($_GET['post']=='pembayaran'){
            $is="Cara Pembayaran";
          }
        ?>
        <legend class="text-right"><h2><?php echo $is; ?></h2></legend>
                        <?php 
            $comot= mysqli_query($koneksi, "SELECT * FROM setup_bantuan WHERE kat_bantuan='$_GET[post]'");   
            while($ngisi= mysqli_fetch_array($comot)){
              if ($ngisi['judul_bantuan']!=""){ 
            ?>          
              <div class="span4">
              <legend><h3><?php echo $ngisi['judul_bantuan']; ?></h3></legend>
              </div>
            <?php
              }
              echo $ngisi['konten_bantuan'];
              echo "<br />";
            }
            ?>
            </div>
        </div>
    </div>
 


  </section>

  <!-- #paket-tour -->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        PT. Trajekline Jember
      </div>
      <div class="credits">
        Cooperation with <a href="#soultaker">Soul Taker</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
