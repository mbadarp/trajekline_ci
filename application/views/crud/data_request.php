<?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<head>
	<title>Data Admin</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-1.7.1.min.js"></script>
</head>
<body>
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Admin</h6>
    <br>
    <a href="admin/tambah" class="btn btn btn-success btn-sm editbtn"><span class="text">Tambah</span></a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr><th>No</th>
            <th>ID Request</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Kota Tujuan</th>
            <th>Jumlah Orang</th>
            <th>Jumlah Hari</th>
            <th>Tgl Berangkat</th>
            <th>Tujuan Wisata</th>
            <th>Tiket</th>
            <th>Penginapan</th>
            <th>Fasilitas</th>
            <th>Status</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
        <tr><th>No</th>
        <th>ID Request</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Kota Tujuan</th>
            <th>Jumlah Orang</th>
            <th>Jumlah Hari</th>
            <th>Tgl Berangkat</th>
            <th>Tujuan Wisata</th>
            <th>Tiket</th>
            <th>Penginapan</th>
            <th>Fasilitas</th>
            <th>Status</th>
            <th>Aksi</th>
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
                 echo "  ";
                echo '<a href="'.base_url('request/hapus/'.$baris->id_request).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
            ?>
            
            </td>
        </tr>
            <?php }?>
        </tbody>
        </table>
    </div>
  
    <!-- <a href="admin/tambah" class="btn btn-succes btn-icon-split"><span class="text">Tambah</span></a> -->
    </div>
    </div>
</div>
