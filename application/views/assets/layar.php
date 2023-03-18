
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="plugin/sweetalert2.all.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="plugin/sweetalert2.min.css">
<script type="text/javascript" src="plugin/zxing/zxing.min.js"></script>
<style>
  .bg{
    background-color: #abe9cd;
background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);

  }
</style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><strong><marquee behavior="" direction="">LAYAR UNTUK SCAN QRCODE ABSENSI</marquee></strong></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" id="demo-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <div class="alert alert-warning mb-2" role="alert">
  <strong><i class="fa fa-exclamation-triangle"></i> Informasi</strong> Untuk melakukan absen, silahkan scan QRCODE anda disini!
</div>
              <?php
                    $attributes = array('id' => 'button');
                    echo form_open('scan/cek_id',$attributes);?>
     <center>

     <select id="pilihKamera" class="form-control mb-2" style="max-width:400px">
     </select>
     <video id="previewKamera" class="img img-thumbnail" style="width: 800;height: 500px;"></video>
         
         </center>
         <input type="hidden" name="idkaryawan" style="display: none;" id="hasilscan">
     <div id="hilang">
     <input type="submit"  id="button" class="btn btn-success btn-md" value="Cek Kehadiran"></span>

     </div>
            <?= form_close(); ?>
                  <script>  
                  $("#hilang").hide()
        let selectedDeviceId = null;    
        const codeReader = new ZXing.BrowserMultiFormatReader();
        const sourceSelect = $("#pilihKamera");
        let audio = new Audio("assets/audio/beep.mp3");

        $(document).on('change','#pilihKamera',function(){
            selectedDeviceId = $(this).val();
            if(codeReader){
                codeReader.reset()
                initScanner()
            }
        })
 
        function initScanner() {
            codeReader
            .listVideoInputDevices()
            .then(videoInputDevices => {
                videoInputDevices.forEach(device =>
                    console.log(`${device.label}, ${device.deviceId}`)
                );
 
                if(videoInputDevices.length > 0){
                     
                    if(selectedDeviceId == null){
                        if(videoInputDevices.length > 1){
                            selectedDeviceId = videoInputDevices[1].deviceId
                        } else {
                            selectedDeviceId = videoInputDevices[0].deviceId
                        }
                    }
                     
                     
                    if (videoInputDevices.length >= 1) {
                        sourceSelect.html('');
                        videoInputDevices.forEach((element) => {
                            const sourceOption = document.createElement('option')
                            sourceOption.text = element.label
                            sourceOption.value = element.deviceId
                            if(element.deviceId == selectedDeviceId){
                                sourceOption.selected = 'selected';
                            }
                            sourceSelect.append(sourceOption)
                        })
                 
                    }
 
                    codeReader
                        .decodeOnceFromVideoDevice(selectedDeviceId, 'previewKamera')
                        .then(result => {
                            audio.play();
                                //hasil scan
                                console.log(result.text)
                                $("#hasilscan").val(result.text);
                                $("#button").submit();
                                
                        })
                        .catch((err) => {
                            console.error(err)
                            document.getElementById('result').textContent = err
                        })
                     
                } else {
                    alert("Camera not found!")
                }
            })
            .catch(err => console.error(err));
        }
 
 
        if (navigator.mediaDevices) {
             
 
            initScanner()
             
 
        } else {
            alert('Cannot access camera.');
        }
//     window.addEventListener('load', function () {
//     let selectedDeviceId;
//     let audio = new Audio("assets/audio/beep.mp3");
//     const codeReader = new ZXing.BrowserQRCodeReader()
//     console.log('ZXing code reader initialized')
//     codeReader.getVideoInputDevices()
//     .then((videoInputDevices) => {
//         const sourceSelect = document.getElementById('sourceSelect')
//         selectedDeviceId = videoInputDevices[0].deviceId
//         if (videoInputDevices.length >= 1) {
//             videoInputDevices.forEach((element) => {
//                 const sourceOption = document.createElement('option')
//                 sourceOption.text = element.label
//                 sourceOption.value = element.deviceId
//                 sourceSelect.appendChild(sourceOption)
//             })
//             sourceSelect.onchange = () => {
//                 selectedDeviceId = sourceSelect.value;
//             };
//             const sourceSelectPanel = document.getElementById('sourceSelectPanel')
//             sourceSelectPanel.style.display = 'block'
//         }
//         codeReader.decodeFromInputVideoDevice(selectedDeviceId, 'video').then((result) => {
//             console.log(result)
//             document.getElementById('result').textContent = result.text
//             if(result != null){
//                 audio.play();
//                 console.log(result.text);
//             }
//             $('#button').submit();
//         }).catch((err) => {
//             console.error(err)
//             document.getElementById('result').textContent = err
//         })
//         console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
//     })
//     .catch((err) => {
//         console.error(err)
//     })
// })
                  </script>
              </div>
            </div>

           
          </div>
          <!-- /.col-md-6 -->
        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
<?php 
    if($this->session->flashdata('msg') == 'masuk'){
?>
    <script>
        Swal.fire(
            "Informasi",
            'Berhasil Absen Masuk',
            "success"
        );
    </script>
<?php } ?>
<?php 
    if($this->session->flashdata('msg') == 'pulang'){
?>
    <script>
        Swal.fire(
            "Informasi",
            'Berhasil Absen Pulang',
            "success"
        );
    </script>
<?php } ?>
<?php 
    if($this->session->flashdata('msg') == 'error'){
?>
    <script>
        Swal.fire(
            "Informasi",
            'Maaf, gagal menemukan data di QRCODE tersebut!',
            "warning"
        );
    </script>
<?php } ?>
<?php 
    if($this->session->flashdata('msg') == 'sudah'){
?>
    <script>
        Swal.fire(
            "Informasi",
            'Anda sudah melakukan absen!',
            "info"
        );
    </script>
<?php } ?>