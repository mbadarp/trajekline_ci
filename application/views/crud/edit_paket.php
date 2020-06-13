
<title>Tambah Paket</title><div id="page-wrapper">
   <div class="row col-lg-18">
       
       <div class="panel panel-default">
           <div class="panel-heading"><h3>Tambah Data Paket Tour</h3></div>
           <div class="panel-body  ">
           <?php foreach($paket as $baris)?>
                 <form name="tambah_profil" action="<?php echo base_url().'admin/update_paket';?>" method="post" enctype="multipart/form-data">
                       <fieldset>
                       <div class="form-row">
                  <div class="col">
                  <input type="hidden" name="id_paket" value="<?php echo $baris->id_paket; ?>">
                    <label for="nama_paket">Nama Paket</label>
                    <input type="text" class="form-control" id="nama_paket" placeholder="Masukan Nama Paket" name="nama_paket" value="<?php echo $baris->nama_paket; ?>" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="nama_wisata">Nama Wisata</label>
                    <input name="nama_wisata" type="text" class="form-control" id="nama_wisata"
                      placeholder="Masukkan Nama Wisata" value="<?php echo $baris->nama_wisata; ?>" required>
                  </div>
                  <div class="col">
                    <label for="harga">Harga</label>
                    <input name="harga" type="text" class="form-control" id="harga"
                      placeholder="Masukkan Harga" value="<?php echo $baris->harga; ?>" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="fasilitas">Fasilitas</label>
                    <input name="fasilitas" type="text" class="form-control" id="fasilitas" placeholder="Masukkan Fasilitas" value="<?php echo $baris->fasilitas; ?>"
                      aria-describedby="inputGroupPrepend" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" class="custom-select" id="kategori"  value="<?php echo $baris->kategori; ?>"required>
                    <?php
                                      for($i=1; $i<=4; $i++){
                                          if($i==1){
                                              $value="Gunung";
                                              $salue="Gunung";
                                          }else if($i==2){
                                              $value="Pantai";
                                              $salue="Pantai";
                                          }else if($i==3){
                                              $value="Taman Bermain";
                                              $salue="Taman Bermain";
                                          }else if($i==4){
                                              $value="Wisata Pendidikan";
                                              $salue="Wisata Pendidikan";
                                          }
                                          
                                          if($baris->kategori==$value){
                                              $sel= "selected";
                                          }else{
                                              $sel= "";
                                          }
                                          echo "<option value='$value' $sel>$salue</option>";
                                        }
                                      ?>
                    </select>
                  </div>
                </div>       
                <div class="form-row">
                  <div class="col">
                    <label for="foto">Foto</label>
                    <input name="foto" type="file" class="form-control" id="foto" placeholder="Masukkan Foto"
                      aria-describedby="inputGroupPrepend" src="<<?php echo base_url();?>asset/img/destinasi/<?php echo $baris->foto;?>" required>

                  </div>
                </div>    
                         <div class="card-body" >
                             <label>Deskripsi</label>
                               <textarea class="form-control" name="deskripsi"  value="<?php echo $baris->deskripsi; ?>" ></textarea>
                           </div>

                        									
                         <div class="btn-group">
                           <input class="btn btn-success btn-icon-split" name="Tambah" type="submit" value="update" class="btn" >
                           </div>
                           <a class="small" href="<?php echo base_url('admin/getPaket')?>"><button class="btn btn-primary btn-sm btninsert" >Kembali</button></a>
                           <?php}?>
               
                       </fieldset>
                        
                   </form>
               </div>
           </div>

           <script>
$('.tooltip-demo').tooltip({
selector: "[data-toggle=tooltip]",
container: "body"
})
</script>
<!-- tinyMCE-->
<script type="text/javascript" src="<?php echo base_url('asset/tinymce/tinymce.min.js')?>"></script>
<script type="text/javascript">
tinymce.init({
   selector: "textarea",
   plugins: [
           "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
           "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
           "table contextmenu directionality emoticons template textcolor paste textcolor filemanager"
   ],

   toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
   toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
   toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

   menubar: false,
   toolbar_items_size: 'small',
   image_advtab: true,
   style_formats: [
           {title: 'Bold text', inline: 'b'},
           {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
           {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
           {title: 'Example 1', inline: 'span', classes: 'example1'},
           {title: 'Example 2', inline: 'span', classes: 'example2'},
           {title: 'Table styles'},
           {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
   ],

   templates: [
           {title: 'Test template 1', content: 'Test 1'},
           {title: 'Test template 2', content: 'Test 2'}
   ]
});</script>