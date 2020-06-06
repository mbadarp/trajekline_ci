<section id="home" class="masthead text-white text-center">
  <div class="home-container" >
    
  <div class="overlay"></div>

  <div class=row>
  
  <form action="<?php echo base_url('customer/proses_regis'); ?>" method="POST" class="user" id="register">
  <h4>Buat Akun !</h4>
  <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="nama_depan"type="text" class="form-control form-control-user" id="exampleNamaDepan" placeholder="Nama Depan">
                  </div>
                  <div class="col-sm-6">
                    <input name="nama_belakang" type="text" class="form-control form-control-user" id="exampleNamaBelakang" placeholder="Nama Belakang">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="email"type="text" class="form-control form-control-user" id="exampleEmail" placeholder="Email">
                  </div>
                  <div class="col-sm-6">
                    <input name="no_telepon" type="text" class="form-control form-control-user" id="exampleNoTelepon" placeholder="No.Telepon">
                  </div>
                </div>
                <div class="form-group">
                   <input name="alamat" type="text" class="form-control form-control-user" id="exampleAlamat" placeholder="Alamat Lengkap">
                </div>
                <div class="form-group">
                  <input name="username" type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input name="password" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                  
       <input class="btn btn-primary btn-user btn-block" name="register" type="submit" value="Buat Akun">
                <hr>
  <div class="text-center">
     <a class="small" href="#">Lupa Password?</a>
 </div>
 <div class="text-center">
    <a class="small" href="<?php echo base_url('customer/login'); ?>">Login</a>
  </div>
  </form>
  
  </div>
  </div>






  </section>
