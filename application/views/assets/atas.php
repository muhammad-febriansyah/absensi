<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$setting = $this->db->get('setting');
$row = $setting->row();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="<?php echo $row->web; ?>">
	<meta name="author" content="<?php echo $row->web; ?>">
	<meta name="generator" content="<?php echo $row->web; ?>">
  <title><?php echo $row->web ?></title>
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
  <link rel="stylesheet" type="text/css" href="plugin/waiting/waiting.css">
	<link rel="stylesheet" type="text/css" href="plugin/bpopup/formuser.css">
	<script src="plugin/waiting/waiting.min.js"></script>
	<script src="plugin/bpopup/jquery.bpopup.min.js"></script>

<link rel="stylesheet" type="text/css" href="plugin/bootstrapdatepicker/bootstrap-datepicker.css">
  <link rel="stylesheet" href="plugin/dttable/css/dataTables.bootstrap4.min.css" type="text/css" media="" />
	<script type="text/javascript" language="javascript" src="plugin/dttable/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="plugin/dttable/js/dataTables.bootstrap4.min.js"></script>
  
  <link rel="stylesheet" href="plugin/MarkerCluster.css" />
	<link rel="stylesheet" href="plugin/MarkerCluster.Default.css" />
	<script src="plugin/leaflet.markercluster-src.js"></script>
  
  <script src="plugin/highchart/highcharts.js"></script>
<script src="plugin/highchart/modules/data.js"></script>
<script src="plugin/highchart/modules/drilldown.js"></script>
<script src="plugin/highchart/modules/exporting.js"></script>
<script src="plugin/highchart/modules/export-data.js"></script>
<script src="plugin/highchart/modules/accessibility.js"></script>

<!-- donat -->
<script src="plugin/highchart/highcharts.js"></script>
<script src="plugin/highchart/modules/exporting.js"></script>
<script src="plugin/highchart/modules/export-data.js"></script>
<script src="plugin/highchart/modules/accessibility.js"></script>
  <!-- end -->
  
<style>
    .highcharts-figure, .highcharts-data-table table {
  min-width: 310px; 
  max-width: 800px;
  margin: 1em auto;
}

#container {
  height: 400px;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>
<style>
      @import 'https://code.highcharts.com/css/highcharts.css';

.highcharts-pie-series .highcharts-point {
	stroke: #EDE;
	stroke-width: 2px;
}
.highcharts-pie-series .highcharts-data-label-connector {
	stroke: silver;
	stroke-dasharray: 2, 2;
	stroke-width: 2px;
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 320px; 
  max-width: 600px;
  margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="row">
	<div id="psatu" class="col-lg-11" style="display: none"></div>
	<div id="divpopup"></div>
</div>
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

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="main/index" class="nav-link <?php if($this->uri->segment(2) == 'index') echo 'active' ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="main/status" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="main/jabatan" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="main/shift" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Shift</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="main/gedung" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Lokasi</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="main/karyawan" class="nav-link <?php if($this->uri->segment(2) == 'karyawan') echo 'active' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pegawai
              </p>
            </a>
          </li>
         
    
          <li class="nav-item">
            <a href="scan/" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-camera"></i>
              <p>
                Scan QRCODE
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="main/historyabsen" class="nav-link <?php if($this->uri->segment(2) == 'historyabsen') echo 'active' ?>">
              <i class="nav-icon fas fa-folder"></i>
              <p>

                History Absensi
              </p>
            </a>
          </li>
         
         
          <li class="nav-item">
            <a href="main/history" class="nav-link <?php if($this->uri->segment(2) == 'history') echo 'active' ?>">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                History Login / Logout
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="main/setting" class="nav-link tambah ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Setting Website</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="main/backup" class="nav-link backup">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Backup Database</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="main/import" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import Database</p>
                </a>
              </li>
            </ul>
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