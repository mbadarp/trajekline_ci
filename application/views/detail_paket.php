<!--==========================
    Detail Paket tour
  ============================-->
  <section id="detail">
 
  <?php
foreach($paket as $detail){
													 
?>
  <div class="container">
  <h3 class="section-title">Paket <?php  echo $detail->nama_paket; ?></h3>
  

 <!-- Corousel Item --> 
  <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="<?php echo base_url();?>asset/img/destinasi/<?php echo $detail->foto;?>" alt="G.Bromo1" width="1100" height="500">
  </div>
  <div class="carousel-item">
  <img src="<?php echo base_url();?>asset/img/destinasi/<?php echo $detail->foto;?>" alt="G.Bromo1" width="1100" height="500">
  </div>
  <div class="carousel-item">
  <img src="<?php echo base_url();?>asset/img/destinasi/<?php echo $detail->foto;?>" alt="G.Bromo1" width="1100" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
 <!-- Akhir Corousel item --> 

<!--Video --> 
  <!-- <div class="box">
        <video src="video/bahan.mp4" autoplay loop="true"></video>
      </div> -->



   <!-- Keterangan Paket --> 
  <div class="container " >
  <div class="container" id="infopaket1" >
    <tr>
      <td><h5 class="section-title"><?php  echo $detail->nama_wisata; ?></h5></td>
      <hr style="border:3px solid #f1f1f1">
    </tr>
    <tr>
    <label for="fasilitas">Fasilitas Paket:</label>
    <br>
    <td><?php  echo $detail->fasilitas; ?></td>
    </tr>

    <tr>
    <br>
      <td>Rp<?php  echo number_format($detail->harga,0,',','.'); ?>/pax</td>
      <br>Tempat Bertemu:<td>Jember</td>
    </tr>
    <div class="col-6 col-md-3">
    <button class="btn btn-primary btn-sm btninsert" data-toggle="modal" data-target="#pesanModal">Pesan Paket</button>
    </div>
  </div>
<!--Akhir Keterangan Paket --> 


<!-- Deskripsi Wisata --> 
  <div class="container" id="deskripsi" >
  <h2 ><?php  echo $detail->nama_wisata; ?></h2>
<p><span id="dots"><?php  echo $detail->deskripsi; ?></span>
  </div>
<!--Akhir Deskripsi Wisata -->   
    <!-- modal input -->
    <?php
    // include 'koneksi.php';
    // $username = $_SESSION['username'];
	// $query	=mysqli_query($koneksi,"SELECT * FROM login_user WHERE username='$username'");
	// $tampil	=mysqli_fetch_array($query);

	
?>
    <div class="modal fade" id="pesanModal" tabindex="-1" role="dialog" aria-labelledby="pesanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <!-- head -->
            <div class="modal-header">
              <h5 class="modal-tittle" id="insertModalLabel">Pesan Paket Tour</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- body -->
            <div class="modal-body">
            <?php 
               if($this->session->userdata("session_customer")){ ?>

              <form action="process-booking.php" method="POST" class="needs-validation" novalidate>
                <input id="id_pesan" type="hidden" name="id_pesan">
                <input type="hidden" name="id"  value="<?php  echo $user->id; ?>">
                <input type="hidden" name="id_paket"  value="<?php  echo $detail->id_paket; ?>">
                <div class="form-row">
                  <div class="col">
                    <label for="nama_paket">Nama Paket</label>
                    <input type="text" name="nama_paket" readonly value="<?php  echo $detail->nama_paket; ?>">
                  </div>
                  <div class="col">
                    <label for="tgl_pesan">Tanggal Pesan</label>
                    <input type="date" class="form-control" id="tgl_pesan" placeholder="Masukkan Tanggal Pesan" name="tgl_pesan" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tanggal Pesan terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="nama_wisata">Nama Wisata</label>
                    <input type="text" name="nama_wisata" readonly value="<?php  echo $detail->nama_wisata; ?>">
                  </div>
                  <div class="col">
                    <label for="tgl_tour">Tanggal Tour</label>
                    <input type="date" class="form-control" id="tgl_tour" placeholder="Masukkan Tanggal Tour" name="tgl_tour" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tanggal Tour terlebih dahulu
                    </div>
                  </div>
                  <input type="hidden" name="status" value="S1">
                </div>
                <!-- footer -->
                <div class="modal-footer">
                  <button name="input" type="Submit" value="add" class="btn btn-primary"
                    onclick="return confirm('Anda yakin ingin menyimpan data?');">Input</button>
                </div>
             <?php }else{
                echo "Login Terlebih dahulu untuk melakukan pemesanan";
             } ?>
              </form>
            </div>

            <?php }?>
          </div>
        </div>
      </div>
      <!-- modal akhir -->

  </section>

  <!-- #paket-tour -->