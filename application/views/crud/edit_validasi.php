<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Status</h1>
 </div>
     <?php foreach($booking as $baris){ ?>
 <form class="user" action="<?php echo base_url('validasi/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id_pesan" value="<?php echo $baris->id_pesan; ?>">
      <input type="hidden" name="id_paket" value="<?php echo $baris->id_paket; ?>">

    </div>
    <div class="form-group">
    <input class="form-control" size="1" name="tgl_pesan" type="date" value="<?php echo $baris->tgl_pesan; ?>" readonly>
    <input class="form-control" size="1" name="tgl_tour" type="date" value="<?php echo $baris->tgl_tour; ?>" readonly>
    </div>
    <div class="form-row">
                <div class="col">
                    <label for="status">Status</label>
                        <select class="form-control" name="status">
                                    	<?php
                                        for($i=0; $i<=4; $i++){
											if($i==1){
												$value="S1";
												$salue="Menunggu";
											}else if($i==2){
												$value="S2";
												$salue="Lunas";
											}else if($i==3){
												$value="S3";
												$salue="Bayar diTempat";
											}else if($i==4){
												$value="S4";
												$salue="Telah Tour";
											}else{
												$value="";
												$salue="-- Pilih --";
											}
											
											if($baris->status==$value){
												$sel= "selected";
											}else{
												$sel= "";
											}
											echo "<option value='$value' $sel>$salue</option>";
										}
										?>
                                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>
    
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('validasi')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>