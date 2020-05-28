<?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<title>Validasi Booking</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-1.7.1.min.js"></script>
</head>
<body>
      <!-- Begin Page Content -->
      <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary datatable">Data Pesan Paket Tour</h6>
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
                      <th scope="col">Status</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <th scope="col">No.</th>
                      <th scope="col">ID Pesan</th>
                      <th scope="col">Nama Customer</th>
                      <th scope="col">Tanggal Pesan</th>
                      <th scope="col">Tanggal Tour</th>
                      <th scope="col">Nama Paket</th>
                      <th scope="col">Nama Wisata</th>
                      <th scope="col">Harga Paket</th>
                      <th scope="col">Status</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </tfoot>
    <tbody>
    <?php $no =1;
            foreach($booking as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->id_pesan;?></td>
             <td><?php echo $baris->nama_depan;?> <?php echo $baris->nama_belakang;?></td>
            <td><?php echo $baris->tgl_pesan;?></td>
            <td><?php echo $baris->tgl_tour;?></td>
            <td><?php echo $baris->nama_paket;?></td>
            <td><?php echo $baris->nama_wisata;?></td>
            <td><?php echo $baris->harga;?></td>
            <td><?php
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
				?>			
			</td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('validasi/edit/'.$baris->id_pesan).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo " ";
                echo '<a href="'.base_url('validasi/hapus/'.$baris->id_pesan).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
            ?>
            
            </td>
        </tr>
            <?php }?>
    </tbody>
  </table>
</div>
</div>
</div>

</div>
<!-- /.container-fluid -->
