<section id="tiket">

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
	<br />
	<form>
    
    <div class="container padding20 grid" style="background-color: white;" id="cetak">
		<legend>TRAJEKLINE Tour dan Travel <i class="place-right"><small>Tanggal : <?php $tgl= date("d M Y"); echo $tgl;?></small></i></legend>
		<div class="row">
            <div class="span4">
				<p class="tertiary-text-secondary"><strong>TRAJEKLINE Tour and Travel </strong><br />
				Jalan Letjen Suprapto<br />
				No. 22a Gang V<br />
				Jember, Jawa Timur</p>
				<p class="tertiary-text-secondary">trajektourtravel@gmail.com<br />
				085376543125</p>
				<p class="tertiary-text-secondary">BCA : 3120618040 a/n Sujiwo Gumaneri<br />
				Mandiri : 1110005416478 a/n Sujiwo Gumaneri</p>
            </div>
            <?php
	foreach($pesan as $baris)

?>
			<div class="span3">
				<a class="tertiary-text-secondary"></a>To<br />
				<p><strong><?php echo $baris->nama_depan;?> <?php echo $baris->nama_belakang;?> </strong><br />
				<?php echo $baris->email;?> <br />
				Phone: <?php echo $baris->no_telepon;?> <br />
				<?php echo $baris->alamat;?> </p>	
            </div>
			<div class="span4 place-right">
				<p class="tertiary-text-secondary text-right">trajek-00<?php echo $baris->id_pesan;?> </p>
				<p class="tertiary-text-secondary text-right">Tgl Pesan: <?php echo $baris->tgl_pesan;?> <br />
				Tgl Tour: <?php echo $baris->tgl_tour;?> </p>	
            </div>
			
        </div>
		<div class="row">
            <table class="table">
                <thead>
                   	<tr>
                       	<th class="text-left" width="5%">#</th>
						<th class="text-left" width="30%">Nama Paket</th>
						<th class="text-left" width="15%">Kode</th>
						<th class="text-left" width="35%">Nama Wisata</th>
						<th class="text-center" width="15%">Biaya</th>
					</tr>
				</thead>
				<tbody>
                   	<tr>
                       	<td class="text-left" width="5%">1</td>
						<td class="text-left" width="30%"><?php echo $baris->nama_paket;?> </td>
						<td class="text-left" width="15%">PKT14-00<?php echo $baris->id_paket;?> </td>
						<td class="text-left" width="35%"><?php echo $baris->nama_wisata;?> </td>
						<td class="text-right" width="15%"><?php echo $baris->harga;?>  IDR</td>
					</tr>
					
					<tr class="selected">
                       	<td class="text-left" width="5%"></td>
						<td class="text-left" width="30%"></td>
						<td class="text-left" width="15%"></td>
						<td class="text-left" width="35%"><strong>Total Biaya</strong></td>
						<td class="text-right" width="15%"><strong><?php echo $total=$baris->harga;?></strong> IDR</td>
					</tr>
				</tbody>
			</table>	
			<Script type="text/javascript">
				window.print();
			</Script>
        </div>
	  
		<??>
    </div>
	</form>
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    