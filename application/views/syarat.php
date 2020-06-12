<section id="syarat">

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
         <div class="panel-heading"></div>
         <div class="panel-body  ">
         <?php 
						foreach($syarat as $ngisi){
						?>					
							<div class="span4">
							<legend><h3><?php echo $ngisi->judul_bantuan; ?></h3></legend>
							</div>
						<?php
							}
							echo $ngisi->konten_bantuan;
							echo "<br />";
						
						?>
                        <?}?>
             </div>
         </div>
  <!-- ---------------------------------------- ISI TAB ------------------------------------- -->

</section>




