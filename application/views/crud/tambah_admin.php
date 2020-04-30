<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Admin</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('admin/input');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="text" class="form-control form-control-user" id="nama_admin"name="nama_admin" placeholder="Masukkan Nama Admin " require>
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="user_admin"name="user_admin" placeholder="Masukkan Username"  require>
      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password "  require >
    </div>
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email"  require >
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="level" name="level" placeholder="level" require>
    </div>
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('admin')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>