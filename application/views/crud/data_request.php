<?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<head>
	<title>Data Saran</title>
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
    <h6 class="m-0 font-weight-bold text-primary datatable">Data Saran</h6>
   
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Request</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Kota Tujuan</th>
            <th scope="col">Jumlah Orang</th>
            <th scope="col">Lama Hari</th>
            <th scope="col">Tgl Berangkat</th>
            <th scope="col">Tujuan Wisata</th>
            <th scope="col">Tiket</th>
            <th scope="col">Penginapan</th>
            <th scope="col">Fasilitas</th>
            <th scope="col">Status</th>
            <th scope="col">
              <center><span>Action</span></center>
            </th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th scope="col">No.</th>
            <th scope="col">ID Request</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Kota Tujuan</th>
            <th scope="col">Jumlah Orang</th>
            <th scope="col">Lama Hari</th>
            <th scope="col">Tgl Berangkat</th>
            <th scope="col">Tujuan Wisata</th>
            <th scope="col">Tiket</th>
            <th scope="col">Penginapan</th>
            <th scope="col">Fasilitas</th>
            <th scope="col">Status</th>
            <th scope="col">
              <center><span>Action</span></center>
            </th>
          </tr>
        </tfoot>
        <tbody>
        <?php $no =1;
            foreach($request as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->id_request;?></td>
             <td><?php echo $baris->nama_lengkap;?></td>
             <td><?php echo $baris->email;?></td>
            <td><?php echo $baris->kota_tujuan;?></td>
            <td><?php echo $baris->jumlah_orang;?></td>
            <td><?php echo $baris->lama_hari;?></td>
            <td><?php echo $baris->tgl_berangkat;?></td>
            <td><?php echo $baris->tujuan_wisata;?></td>
            <td><?php echo $baris->tiket;?></td>
            <td><?php echo $baris->penginapan;?></td>
            <td><?php echo $baris->fasilitas;?></td>
            <td><?php echo $baris->status;?></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('request/edit/'.$baris->id_request).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "";
                 echo '<a href="'.base_url('request/hapus/'.$baris->id_request).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
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

