<?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<title>Setup Profil</title>
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
<h6 class="m-0 font-weight-bold text-primary datatable">Data Profil Perusahaan</h6>
<a href="<?php echo base_url('bantuan/tambah_profil')?>"><button class="btn btn-primary btn-sm btninsert" >+ Input Data</button></a>
</div>
<div class="card-body">
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi/Konten</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <th scope="col">No.</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi/Konten</th>
        <th scope="col">
          <center><span>Action</span></center>
        </th>
      </tr>
    </tfoot>
    <tbody>
    <?php $no =1;
            foreach($profil as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->judul_bantuan;?></td>
            <td><?php echo $baris->konten_bantuan;?></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('bantuan/editprofil/'.$baris->id_bantuan).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "  ";
                echo '<a href="'.base_url('bantuan/hapusprofil/'.$baris->id_bantuan).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
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
