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
    
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr><th>No</th>
            <th>ID Saran</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subjek</th>
            <th>Saran Masukkan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
        <tr><th>No</th>
        <th>ID Saran</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subjek</th>
            <th>Saran Masukkan</th>
            <th>Aksi</th>
        </tr>
        </tfoot>
        <tbody>
        <?php $no =1;
            foreach($saran as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->id_saran;?></td>
             <td><?php echo $baris->nama;?></td>
            <td><?php echo $baris->email;?></td>
            <td><?php echo $baris->subjek;?></td>
            <td><?php echo $baris->saran_masukan;?></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('saran/edit/'.$baris->id_saran).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "  ";
                echo '<a href="'.base_url('saran/hapus/'.$baris->id_saran).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
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
