<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit User</h1>
 </div>
     <?php foreach($user as $baris){ ?>
 <form class="user" action="<?php echo base_url('admin/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id_admin" value="<?php echo $baris->id_admin; ?>">
      <input type="text" class="form-control form-control-user" id="nama_admin"name="nama_admin" placeholder="Nama Admin " value="<?php echo $baris->nama_admin; ?>" require>
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="user_admin"name="user_admin" placeholder="Username " value="<?php echo $baris->user_admin; ?>" require>
      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password " value="<?php echo $baris->password; ?>" require >
    </div>
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?php echo $baris->email; ?>" require >
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="level" name="level" placeholder="level" value="<?php echo $baris->level; ?>" require>
    </div>
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('admin')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>