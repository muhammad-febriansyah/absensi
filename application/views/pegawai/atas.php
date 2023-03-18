
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Program Absensi</title>
  <link rel="apple-touch-icon" href="logo.png" sizes="180x180">
	<link rel="icon" href="logo.png" sizes="32x32" type="image/png">
	<link rel="icon" href="logo.png" sizes="16x16" type="image/png">
	<link rel="mask-icon" href="logo.png" color="#563d7c">
	<link rel="icon" href="logo.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- iCheck -->
  <!-- JQVMap -->
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <!-- summernote -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="plugin/notify.js"></script>
  <script src="plugin/sweetalert2.all.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="plugin/sweetalert2.min.css">
	<script src="plugin/bootstrapdatepicker/bootstrap-datepicker.js"></script>

<link rel="stylesheet" type="text/css" href="plugin/bootstrapdatepicker/bootstrap-datepicker.css">
  <link rel="stylesheet" href="plugin/dttable/css/dataTables.bootstrap4.min.css" type="text/css" media="" />
	<script type="text/javascript" language="javascript" src="plugin/dttable/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="plugin/dttable/js/dataTables.bootstrap4.min.js"></script>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dart navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <h3 class="mr-3 text-light">  <?php
                        if (function_exists('date_default_timezone_set'))
                            date_default_timezone_set('Asia/Jakarta');
                        ?> <span id="clock">&nbsp;</span> </h3>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="btn btn-warning"  href="welcome/logout" onclick="return confirm('Yakin ingin logout?')">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
       
      </li>
     
  
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E-Absensi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="plugin/pria.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama') ?></a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="pegawai/kartu" class="nav-link <?php if($this->uri->segment(2) == 'kartu') echo 'active' ?>">
              <i class="nav-icon fas fa-qrcode"></i>
              <p>
                Kartu Absensi
              </p>
            </a>
          </li>
               <li class="nav-item">
            <a href="pegawai/history" class="nav-link <?php if($this->uri->segment(2) == 'history') echo 'active' ?>">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                History Absensi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="welcome/logout" onclick="return confirm('Yakin ingin logout?')" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
      $(".tambah").click(function(e){
          e.preventDefault();
            $('#proses').waiting();
            $.ajax({
              url:$(this).attr('href'),
              type: 'post',
              data: $(this).serialize(),
              dataType: "html",
              success: function(dt){
                $('#proses').waiting('done');
                $("#psatu").html(dt);
                $('#psatu').bPopup({
                  fadeSpeed: 'slow',
                  followSpeed: 300,
                  modalClose: false,
                  opacity: 0.6,
                  positionStyle: 'fixed',
                  onClose: function(){
                    // window.location="panel/rekap"
                  }
                });

              }
          }); 
			}); 

      $(".backup").on('click',function(e){
		e.preventDefault();
    Swal.fire({
  title: 'Informasi',
  text: "Backup Database ?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, backup!'
}).then((result) => {
  if (result.isConfirmed) {
    $('#proses').waiting();
			$.ajax({
			  url:$(this).attr('href'),
			  type: 'post',
			  data: $(this).serialize(),
			  dataType: "html",
				 success: function(dt){
					 if(dt){
					Swal.fire(
					  'Informasi',
					  'Berhasil Backup Database!',
					  'success'
					);
					 }else{

						Swal.fire(
					  'Informasi',
					  'Gagal Backup!',
					  'warning'
					);

					 }
					 
					 $('#proses').waiting('done');

				 }
		});
  }
})
	}); 
  
  var d = new Date();
    var hours = d.getHours();
    var minutes = d.getMinutes();
    var seconds = d.getSeconds();
    var hari = d.getDay();
    var namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    hariIni = namaHari[hari];
    var tanggal = ("0" + d.getDate()).slice(-2);
    var month = new Array();
    month[0] = "Januari";
    month[1] = "Februari";
    month[2] = "Maret";
    month[3] = "April";
    month[4] = "Mei";
    month[5] = "Juni";
    month[6] = "Juli";
    month[7] = "Agustus";
    month[8] = "September";
    month[9] = "Oktober";
    month[10] = "Nopember";
    month[11] = "Desember";
    var bulan = month[d.getMonth()];
    var tahun = d.getFullYear();
    var date = Date.now(),
        second = 1000;

    function pad(num) {
        return ('0' + num).slice(-2);
    }

    function updateClock() {
        var clockEl = document.getElementById('clock'),
            dateObj;
        date += second;
        dateObj = new Date(date);
        clockEl.innerHTML = '' + hariIni + ',  ' + tanggal + ' ' + bulan + ' ' + tahun + ' | ' + pad(dateObj.getHours()) + ':' + pad(dateObj.getMinutes()) + ':' + pad(dateObj.getSeconds());
    }
    setInterval(updateClock, second);
  </script>