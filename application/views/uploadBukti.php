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
<div class="container grid">
		<div class="row">
			<div class="span5">
			<?php echo $error;?>
				<legend>Upload Bukti Pembayaran</legend>
				<p><strong><?php  if(isset($_GET['status'])){ echo "&laquo; ".$_GET['status']." &raquo;"; }?></strong></p><br />
				<p>Upload bukti bahwa anda telah melakukan pembayaran. Bukti yang diupload hanya berupa gambar (jpg, png, gif).</p>
				<?php foreach($paket as $row)?>
				<form name="formUploadBukti" method="post" action="<?php echo base_url('bookingList/Upload');?>" enctype="multipart/form-data">
					<div class="input-control text" data-role="input-control">
					<input type="hidden" name="id_pesan" value="<?php echo $row->id_pesan; ?>">
						<input type="file" name="userfile" id="userfile">
						<button class="btn-upload"></button>
					</div>
					
					<input type="submit" name="Submit" value="Kirim">
				</form>
			</div>
		</div>
    </div>