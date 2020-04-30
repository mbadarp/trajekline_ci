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
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Customer</h6>
    <br>
    <a href="user/tambah" class="btn btn btn-success btn-sm editbtn"><span class="text">Tambah</span></a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr><th>No</th>
        <th>Id</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Email</th>
            <th>Tipe Identitas</th>
            <th>No. Identitas</th>
            <th>Telepon</th>
            <th>No.Rekening</th>
            <th>Nama Rekening</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
        <tr><th>No</th>
        <th>Id</th>
             <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Email</th>
            <th>Tipe Identitas</th>
            <th>No. Identitas</th>
            <th>Telepon</th>
            <th>No.Rekening</th>
            <th>Nama Rekening</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        </tfoot>
        <tbody>
        <?php $no =1;
            foreach($user as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->id;?></td>
             <td><?php echo $baris->nama_depan;?></td>
             <td><?php echo $baris->nama_belakang;?></td>
             <td><?php echo $baris->email;?></td>
             <td><?php echo $baris->tipe_identitas;?></td>
             <td><?php echo $baris->no_identitas;?></td>
             <td><?php echo $baris->no_telepon;?></td>
             <td><?php echo $baris->no_rek;?></td>
             <td><?php echo $baris->nama_rek;?></td>
             <td><?php echo $baris->alamat;?></td>
            <td><?php echo $baris->username;?></td>
            <td><?php echo $baris->password;?></td>
            <td><?php echo $baris->level;?></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('customer/edit/'.$baris->id).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "  ";
                echo '<a href="'.base_url('customer/hapus/'.$baris->id).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
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
