<?php 
  $q = $this->db->query("select * from setting")->row();
?>
<!-- /.content-wrapper -->
 <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="https://adminlte.io"><?php echo $q->web ?></a>.</strong>
    All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div> -->
  </footer>

 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- Sparkline -->
<!-- JQVMap -->
<!-- jQuery Knob Chart -->
<!-- daterangepicker -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- Summernote -->
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
</body>
</html>
