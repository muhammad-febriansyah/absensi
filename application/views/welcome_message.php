<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


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
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
<script src="assets/plugins/jquery/jquery.min.js"></script>
<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
<script src="assets/plugins/toastr/toastr.min.js"></script>
<style>
  .bg{
    background-color: #abe9cd;
background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);

  }
</style>
</head>
<body class="bg hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a  class="h1"><b>Program</b> Absensi</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="welcome/cekid" id="masuk" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" autocomplete="off" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
	  <script type="text/javascript">
	$(document).ready(function()
	{
		$("#masuk").on('submit',function(e){
			e.preventDefault();
			$.ajax({
			  url:$(this).attr('action'),
			  type: 'post',
			  data: $(this).serialize(),
			  dataType: "html",
			  success: function(dt){
				if(dt==0){
					toastr.error('Username atau password anda salah!');
				}else{
					window.location=dt
				}
			  }
			});
		});
		});
	</script>
     <p class="mb-0">
        <a href="welcome/daftar" class="text-center">Daftar Karyawan</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
