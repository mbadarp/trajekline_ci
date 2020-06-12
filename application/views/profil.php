<body>

<section id="profilCust">
<?php  ?> <!-- Panggil database -->

  <div class="">
    <div class="row" style="background: url(<?php echo base_url();?>asset/img/d-bromo2.jpg) top left no-repeat; background-size: cover; height:340px ;">
        <div class="container" style="padding: 40px 20px">
            <h1 class="fg-white place-right" >Welcome to<br /> Trajekline Tour and Travel</h1>
            <h4 class="fg-white place-right">
                Selamat datang di Website kami, kenyamanan anda adalah kepuasan kami
            </h4>
        </div>
    </div>
</div>

  <?php
    $this->session->userdata("session_customer");
    foreach($profil as $baris) {

    
	// $query	=mysqli_query($koneksi,"SELECT * FROM login_user WHERE username='$username'");
	// $baris	=mysqli_fetch_array($query);
?>
    
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
   
    <div class="container" id="datadiri">
            <div class="span6">
                <legend><p><h3><?php echo $baris->nama_depan;?>   <?php echo $baris->nama_belakang;?></h3></p></legend>
            </div>
			<div class="span6">
                <table class="table striped hovered">
                	<tbody>
                    	<tr>
                        	<th class="text-left">Email</th>
                            <th class="text-left"><abbr title="Email tidak dapat dirubah!"><em><?php echo $baris->email;?></em></abbr></th>
                        </tr>
						<tr>
                        	<th class="text-left">Nomor Identitas</th>
                            <th class="text-left">[<?php echo $baris->tipe_identitas;?>] <?php echo $baris->no_identitas;?></th>
                        </tr>
						<tr>
                        	<th class="text-left">Telpon/Handphone</th>
                            <th class="text-left"><em><?php echo $baris->no_telepon;?></em></th>
                        </tr>
						<tr>
                        	<th class="text-left">Nomor Rekening</th>
                            <th class="text-left"><abbr title="Rekening digunakan sebagai konfirmasi pembayaran tiket secara transfer."><em><?php echo $baris->no_rek;?> a/n. <?php echo $baris->nama_rek;?></em></abbr></th>
                        </tr>
						<tr>
                        	<th class="text-left">Alamat</th>
                            <th class="text-left"><em><?php echo $baris->alamat;?></em></th>
                        </tr>
                        <?php }?>
                    </tbody>
				</table>
				<p class="tertiary-text-secondary"><small>nb: Silahkan lengkapi biodata ini dulu sebelum melakukan booking!!</small></p>
				<a class="button" href="editProfil.php">Edit Profil</a>
            </div>
    </div>

  
  </section>