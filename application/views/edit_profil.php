<section id="profilCust">

<div class="">
  <div class="row" style="background: url(<?php echo base_url();?>asset/img/d-bromo2.jpg) top left no-repeat; background-size: cover; height:340px ;">
      <div class="container" style="padding: 40px 20px">
          <h1 class="fg-white place-right" >Welcome to<br /> Trajekline Tour and Travel</h1>
          <h4 class="fg-white place-right">
              Selamat datang di Website kami, kenyamanan anda adalah kepuasan kami
          </h4>
      </div>
  </div>
</div>
  
  <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
  <div class="panel panel-default">
         <div class="panel-heading"><h3>Setup Profil Trajekline Tour</h3></div>
         <div class="panel-body  ">
             <div class="row col-lg-10">
             <?php 
              $this->session->userdata("session_customer");
             foreach($profil as $baris){
                 ?>
               <form name="coba" action="<?php echo base_url('customer/update_profil');?>" method="post" enctype="multipart/form-data">
              
                     <fieldset>
                      
                         <fieldset>
                          <div class="row">
                          <div class="col-lg-3">
                              <div class="form-group">
                                  <label>ID User</label>
                                  <input class="form-control" size="1" name="id" type="text" value="<?php echo $baris->id; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label>Nama Depan</label>
                                  <input class="form-control" name="nama_depan" type="text" value="<?php echo $baris->nama_depan; ?>" >
                              </div>
                              <div class="form-group">
                                  <label>Nama Belakang</label>
                                  <input class="form-control" name="nama_belakang" type="text" value="<?php echo $baris->nama_belakang; ?>" >
                              </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" name="email" type="text" value="<?php echo $baris->email; ?>" >
                              </div>
                          </div>
                          <div class="col-lg-3">
                              <div class="form-group">
                                  <label>Tipe Identitas</label>
                                  <select class="form-control" name="tipe_identitas">
                                      <?php
                                      for($i=1; $i<=4; $i++){
                                          if($i==1){
                                              $value="KTP";
                                              $salue="KTP";
                                          }else if($i==2){
                                              $value="SIM";
                                              $salue="SIM";
                                          }else if($i==3){
                                              $value="Pasport";
                                              $salue="Pasport";
                                          }else if($i==3){
                                              $value="Kartu Pelajar";
                                              $salue="Kartu Pelajar";
                                          }
                                          
                                          if($ngisi['tipe_identitas']==$value){
                                              $sel= "selected";
                                          }else{
                                              $sel= "";
                                          }
                                          echo "<option value='$value' $sel>$salue</option>";
                                        }}
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>Nomer Identitas</label>
                                  <input class="form-control" name="no_identitas" type="text" value="<?php echo $baris->no_identitas; ?>" >
                              </div>
                              <div class="form-group">
                                  <label>Nomer Telepon</label>
                                  <input class="form-control" name="no_telepon" type="text" value="<?php echo $baris->no_telepon; ?>" >
                              </div>
                              <div class="form-group">
                                  <label>No Rekening</label>
                                  <input class="form-control" name="no_rek" type="text" value="<?php echo $baris->no_rek; ?>" >
                              </div>
                             </div>
                          <div class="col-lg-3">
                          <div class="form-group">
                                  <label>Rekening atas Nama</label>
                                  <input class="form-control" name="nama_rek" type="text" value="<?php echo $baris->nama_rek; ?>" >
                              </div>
                              <div class="form-group">
                                  <label>Alamat Member</label>
                                  <input class="form-control" name="alamat" type="text" value="<?php echo $baris->alamat; ?>" >
                              </div>
                            
                       
                      
                         
                     </fieldset>
                     <input type="submit" name="Edit" value="Simpan Perubahan">
                 </form> <?php}?>
             </div>
         </div>
  <!-- ---------------------------------------- ISI TAB ------------------------------------- -->

</section>
