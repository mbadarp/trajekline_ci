
<html lang="en">
<!-- <?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?> -->
<?php echo @$head; ?>
 
<body id="page-top">
 
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 
      <!-- Main Content -->
      <div id="content">
 
        <!-- Topbar -->
       <?php echo @$topbar; ?>
        <!-- End of Topbar -->
 
        <!-- Begin Page Content -->
        <?php echo @$content; ?>
        <!-- /.container-fluid -->
 
      </div>
      <!-- End of Main Content -->
 
      <!-- Footer -->
      <?php echo @$footer; ?>
      <!-- End of Footer -->
 
    </div>
    <!-- End of Content Wrapper -->
 
  </div>
  <!-- End of Page Wrapper -->

 <!-- <?php echo @$js; ?> -->
 


</body>
</html>