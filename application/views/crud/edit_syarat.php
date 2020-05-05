<title>Edit Syarat</title>
<div id="page-wrapper">
   <div class="row col-lg-18">
   
       <div class="panel panel-default">
           <div class="panel-heading"><h3>Setup Syarat</h3></div>
           <div class="panel-body  ">
               <div class="row col-lg-10">
               <?php foreach($syarat as $baris){ ?>
                 <form name="tambah_syarat" action="<?php echo base_url('bantuan/update_syarat');?>" method="post" enctype="multipart/form-data">
                       <fieldset>
                       <input type="hidden" name="id_bantuan" value="<?php echo $baris->id_bantuan; ?>">
                           <input name="kat_bantuan" type="hidden" value="<?php echo $baris->kat_bantuan; ?>">
                         <div class="card-body "  >
                             <label>Judul</label>
                               <input class="form-control" name="judul_bantuan" type="text"value="<?php echo $baris->judul_bantuan; ?>" >
                           </div>
                         <div class="card-body" >
                             <label>Isi/Content</label>
                               <textarea class="form-control" name="konten_bantuan" <?php echo $baris->konten_bantuan; ?>></textarea>
                           </div>
                        									
                         <div class="btn-group">
                         <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
                           </div>
                           <a class="small" href="<?php echo base_url('bantuan/syarat')?>"><button class="btn btn-primary btn-sm btninsert" >Kembali</button></a>
        
                          
                           <?php } ?>
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