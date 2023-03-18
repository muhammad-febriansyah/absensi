
  <?php 
    $this->load->view('pegawai/atas');
    $id= $this->session->userdata('id');
    $q = $this->db->query("select * from karyawan where id='$id'");
    $row= $q->row();
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kartu Absensi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main/index">Home</a></li>
              <li class="breadcrumb-item active">Kartu Absensi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
       <center>
       <div class="col-md-5 justify-content-center">
        <div class="card card-outline card-dark">
              <div class="card-header">
                <h3 class="card-title">Kartu Absensi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
            <img src="qr/<?php echo $row->qr ?>" class="card-img-top" alt="...">

              <div class="card-body table-responsive" >
                <table class="table">
                    <tr>
                        <td>KODE</td>
                        <td>:</td>
                        <td><?php echo $row->idkaryawan ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $row->nama ?></td>
                    </tr>
                    <tr>
                        <td>Tempat  Lahir</td>
                        <td>:</td>
                        <td><?php echo $row->tempat_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo $row->tgl_lhr?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $row->email?></td>
                    </tr>
                    <tr>
                        <td>No.HP</td>
                        <td>:</td>
                        <td><?php echo $row->telp?></td>
                    </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>   <!-- /.row -->

       </center>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>

  </div>
 <script>
     $(".dttable").DataTable();
 </script>

  <?php 
    $this->load->view('pegawai/bawah');
  ?>