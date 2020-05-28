<?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<title>Data Admin</title>
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
<h6 class="m-0 font-weight-bold text-primary datatable">Data Admin</h6>
<a href="<?php echo base_url('admin/tambah_paket')?>"><button class="btn btn-primary btn-sm btninsert" >+ Input Data</button></a>
</div>
<div class="card-body">
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
      <th scope="col">No.</th>
                      <th scope="col">ID Paket</th>
                      <th scope="col">Nama Paket</th>
                      <th scope="col">Nama Wisata</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Deskripisi</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Foto</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <th scope="col">No.</th>
                      <th scope="col">ID Paket</th>
                      <th scope="col">Nama Paket</th>
                      <th scope="col">Nama Wisata</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Deskripisi</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Foto</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </tfoot>
    <tbody>
    <?php $no =1;
            foreach($paket as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->id_paket;?></td>
             <td><?php echo $baris->nama_paket;?></td>
            <td><?php echo $baris->nama_wisata;?></td>
            <td><?php echo $baris->harga;?></td>
            <td><?php echo $baris->fasilitas;?></td>
            <td><?php $x=substr($baris->deskripsi, 0, 100); echo "$x...";?> </td>
            <td><?php echo $baris->kategori;?></td>
            <td><img src="<?php echo base_url();?>asset/img/destinasi/<?php echo $baris->foto;?>" width='100' height='100'></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('admin/edit_paket/'.$baris->id_paket).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "  ";
                echo '<a href="'.base_url('admin/hapus_paket/'.$baris->id_paket).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
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
