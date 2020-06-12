 <!-- Begin Page Content -->
 <div class="container-fluid">

          

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary datatable">Dashboard Customer</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Pesan</th>
            <th scope="col">Tanggal Pesan</th>
            <th scope="col">Tanggal Tour</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor =1;
          foreach($booking as $baris){
        
        ?>
          <tr>
            <!-- mencetak nomor otomatis, secara increment -->
            <td class="bold"><?php echo $nomor++; ?></td>
            <!-- mencetak data record dari tb_siswa -->
            <td><?php echo $baris->id_pesan;?></td>
            <td><?php echo $baris->tgl_pesan;?> </td>
            <td><?php
            $now= date("Y-m-d");
                              if($baris->tgl_tour<$now){
                                  $txtS="Kadaluarsa!!";
                                  echo "<div class='tooltip-demo'><span data-toggle='tooltip' data-placement='top' title='".$txtS."'><div class='text-danger'><i class='fa fa-warning'></i>&nbsp".$baris->tgl_tour."</div></span></div>";
                              }else{
                                  echo $baris->tgl_tour; 
                              }?></td>
            <td><?php echo $baris->nama_depan; ?> <?php echo $baris->nama_belakang; ?></td>
            <td><div class="tooltip-demo"><span data-toggle="tooltip" data-placement="top" 
                              title="Total Harga <?php echo $baris->harga; ?> IDR">
                              <?php
                              if($baris->status=='S1'){
                                  $stat="Menunggu";
                              }else if($baris->status=='S2'){
                                  $stat="Lunas";
                              }else if($baris->status=='S3'){
                                  $stat="Bayar diTempat";
                              }else if($baris->status=='S4'){
                                  $stat="Telah Tour";
                              }else{
                                  $stat="";
                              }
                              echo $stat;
                              ?></span></div>		
                      </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary datatable">Bukti Pembayaran yang Ter-Upload Terkini</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Pesan</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">File</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no =1;
          foreach($bukti as $baris){
        ?>
          <tr>
            <!-- mencetak nomor otomatis, secara increment -->
            <td class="bold"><?php echo $nomor++; ?></td>
            <!-- mencetak data record dari tb_siswa -->
            <td><?php echo $baris->id_pesan; ?></td>
            <td><?php echo $baris->nama_depan; ?> <?php echo $baris->nama_belakang;?> </td>
            <td><a href="<?php echo base_url();?>asset/img/buktibayar/<?php echo $baris->file ?>" target='_blank'>Lihat File</a></td>
            
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->