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
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary datatable">Data Pesanan Paket Anda</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">ID Pesan</th>
                      <th scope="col">Nama Customer</th>
                      <th scope="col">Tanggal Pesan</th>
                      <th scope="col">Tanggal Tour</th>
                      <th scope="col">Nama Paket</th>
                      <th scope="col">Nama Wisata</th>
                      <th scope="col">Harga Paket</th>
                      <th scope="col">Harga Total</th>
                      <th scope="col">
                        <center><span>Action</span></center>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    /*include 'koneksi.php';
                    $nomor = 1;
                   
                    $query=mysqli_query($koneksi, "SELECT * FROM tbl_pesan, paket_tour, login_user WHERE tbl_pesan.id=login_user.id AND tbl_pesan.id_paket=paket_tour.id_paket AND username=login_user.username")or die(mysqli_error($koneksi));

                    while($isi_tbl=mysqli_fetch_array($query)){*/
                      
                  
                  ?>
                    <tr>
                      <!-- mencetak nomor otomatis, secara increment -->
                      <?php
                        $no=1;

                        foreach($data as $row) {?>
                            <td><?php echo "".$row['id_pesan']; ?></td>
                            <td><?php echo "".$row['nama_depan']; ?> <?php echo "".$row['nama_belakang']; ?></td>
                            <td><?php echo "".$row['tgl_pesan']; ?></td>
                            <td><?php echo "".$row['tgl_tour']; ?></td>
                            <td><?php echo "".$row['nama_paket']; ?></td>
                            <td><?php echo "".$row['nama_wisata']; ?></td>
                            <td><?php echo "".$row['harga']; ?></td>
                            <td><?php echo "".$row['harga']; ?></td>
                            <?php } ?>
                            <td><?php
								$now= date("Y-m-d");
								if($isi_tbl['status']=='S2'&&$isi_tbl['tgl_tour']>=$now||$isi_tbl['status']=='S3'&&$isi_tbl['tgl_tour']>=$now){
								?>
                                <a class="button" href="bookingFinish.php?id=<?php echo $isi_tbl[0]; ?>" data-hint="<?php echo $txtS ?>">Cetak Tiket</a>
								<?php
								}else if($pesan['status']=='S4'){
									echo "Telah Tour";
								}else if($pesan['tgl_tour']<$now){
									echo "<a class='text-warning'>Kadaluarsa!!</a>";
								}else{
									echo "Menunggu";
								?>
									<br /><a class="button" href="uploadBukti.php?id=<?php echo $isi_tbl[0]; ?>" data-hint="Upload Bukti Pembayaran">Upload Bukti</a>
								<?php
								}
								?></td>
                        </div>
                     
                    </tr>
                    <?php
								//}
								?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <!--==========================
    Footer
  ============================-->