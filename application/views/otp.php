
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
<script src="plugin/sweetalert2.all.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="plugin/sweetalert2.min.css">
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
      <a class="h1"><b>Masukan</b> OTP</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="welcome/getstatus" id="masuk" method="post">
        <div class="input-group mb-3">
          <input type="number" name="otp" class="form-control" placeholder="Masukan kode OTP anda">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
      
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
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
					toastr.error('Kode otp anda tidak valid!');
				}else{
          Swal.fire({
                    title: "Informasi",
                    text: "Akun anda berhasil diaktifkan silahkan login!",
                    icon: "success",
                    showCancelButton: false,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true,
                    allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                      window.location=dt


                    })
				}
			  }
			});
		});
		});
	</script>
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
