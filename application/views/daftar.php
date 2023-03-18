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
<script src="plugin/sweetalert2.all.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="plugin/sweetalert2.min.css">
<style>
  .bg{
    background-color: #abe9cd;
background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);

  }
</style>
</head>
<body class="hold-transition mb-5 bg">
    <br>
<div class="container mb-5">


<div class="card">
<div class="card-header bg-dark">
    Daftar Karyawan
  </div>
  <div class="card-body table-responsive">
      <form action="welcome/sendotp" id="save" method="post">
        <div class="row justify-content-center">
            <!-- first row -->
            <div class="col-lg-5">
            <div class="input-group mb-2">
          <input type="text" class="form-control"  autocomplete="off" name="nip" placeholder="NIP">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
        <span class="badge badge-warning mb-2">Kosongkan jika belum punya.</span>
            </div>
            <!-- end -->
            <div class="col-lg-5">
            <div class="input-group mb-3">
          <input type="text" class="form-control" required autocomplete="off" name="nama" placeholder="Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
              <select name="jk" id="" class="form-control">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
          <input type="text" class="form-control" required autocomplete="off" name="tempat_lahir" placeholder="Tempat Lahir">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
          <input type="date" class="form-control" required autocomplete="off" name="tgl_lhr" placeholder="Tanggal Lahir">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
          <input type="text" class="form-control" required autocomplete="off" name="telp" placeholder="Nomor Telepon">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
          <input type="text" class="form-control" required autocomplete="off" name="email" placeholder="Gunakan email aktif untuk OTP">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
              <select name="agama" id="" class="form-control">
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindhu">Hindhu</option>
                <option value="Budha">Budha</option>
                <option value="Lain-lain">Lain-lain</option>
              </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
            <select name="idjabatan" id="" class="form-control">
                <option value="">Pilih Jabatan</option>
                <?php 
                  $q = $this->db->get('jabatan');
                  foreach($q->result() as $row){
                ?>
                <option value="<?php echo $row->id ?>"><?php echo $row->jabatan ?></option>
                <?php }?>
              </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
            <select name="idshift" id="" class="form-control">
                <option value="">Pilih Shift</option>
                <?php 
                  $q = $this->db->get('shift');
                  foreach($q->result() as $row){
                ?>
                <option value="<?php echo $row->id ?>"><?php echo $row->shift ?></option>
                <?php }?>
              </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
            <select name="idgedung" id="" class="form-control">
                <option value="">Pilih Lokasi Penempatan</option>
                <?php 
                  $q = $this->db->get('gedung');
                  foreach($q->result() as $row){
                ?>
                <option value="<?php echo $row->id ?>"><?php echo $row->gedung ?></option>
                <?php }?>
              </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
          <input type="text" class="form-control" required autocomplete="off" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
          <input type="password" class="form-control" required autocomplete="off" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
          <input type="text" class="form-control" required autocomplete="off" name="alamat" placeholder="Alamat">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-edit"></span>
            </div>
          </div>
        </div>
            </div>
            <div class="col-lg-5">
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary mr-3"><i class="fas fa-paper-plane"></i> Daftar Sekarang</button>
              <button type="submit" class="btn btn-danger"><i class="fa fa-sync-alt"></i> Batal</button>
            </div>

            <!-- end row -->
        </div>
      </form>
      <script>
        $("#save").on("submit",function(e){
        e.preventDefault();
        $('button[type="submit"]').attr('disabled','disabled');
        $('button[type="text"]').change(function(){
            if($(this).val != ''){
                $('button[type="submit"]').removeAttr('disabled');
            }
        });
        $.ajax({
                url:  $(this).attr('action'),
                type: 'post',
                data: $(this).serialize(),
                dataType: "html",
                success: function(dt){
                  Swal.fire({
                                    title: "Informasi",
                                    text: "Selamat,pendaftaran akun anda berhasil silahkan cek email lalu isi kode OTP tersebut!",
                                    icon: "success",
                                    showCancelButton: false,
                                    closeOnConfirm: false,
                                    showLoaderOnConfirm: true,
                                    allowOutsideClick: () => !Swal.isLoading()
                                    }).then((result) => {
                                        window.location = "welcome/otp";
                                    })
                },
                error: function(dt){
                    $.notify("Ada Kesalahan Sistem","warning");
                },
            });

        });

      </script>
       
  </div>
  <p class="mb-0">
        <a href="welcome/index" class="text-center">Login Akun</a>
      </p>
</div>

</div>
<!-- /.login-box -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
