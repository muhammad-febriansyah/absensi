
  <?php 
    $this->load->view('assets/atas');
    $query = $this->db->query("select absen.tgl,absen.masuk,absen.keluar,absen.idkaryawan,karyawan.*,gedung.gedung,gedung.alamat as alamatgedung,kehadiran.kehadiran,status.status,jabatan.jabatan from absen inner join kehadiran on kehadiran.id=absen.idkehadiran inner join status on status.id = absen.idstatus inner join karyawan on karyawan.idkaryawan = absen.idkaryawan inner join jabatan on jabatan.id = karyawan.idjabatan inner join gedung on gedung.id = karyawan.idgedung where karyawan.idgedung='$id'");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data History Absensi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main/index">Home</a></li>
              <li class="breadcrumb-item active">Data History Absensi</li>
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
        <div class="col-md-12">
        <div class="card card-outline card-dark">
              <div class="card-header">
                <h3 class="card-title">Data History Absensi Pegawai Perlokasi <?php ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" >
              <table width='100%' class='table table-sm table-hover table-bordered dttable'>
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Tanggal</th>
                          <th>Jam Masuk</th>
                          <th>Jam Keluar</th>
                          <th>Lokasi</th>
                          <th>Alamat Lokasi</th>
                          <th>Kehadiran</th>
                          <th>Status</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    foreach($query->result() as $row){
                  ?>
                  <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->jabatan; ?></td>
                      <td><?php echo $row->tgl; ?></td>
                      <!-- <?php
                       $jam = $this->db->query("select * from jam")->row();
                       $telat = strtotime($jam->masuk);
                       $masukscan = strtotime($row->masuk);
                       $diff  = $telat-$masukscan;
                       $jam    =floor($diff / (60 * 60));
                      ?> -->
                      <td><?php echo $row->masuk; ?></td>
                      <td><?php echo $row->keluar; ?></td>
                      <td><?php echo $row->gedung; ?></td>
                      <td><?php echo $row->alamatgedung; ?></td>
                      <td>
                          <span class="badge badge-pill badge-primary"><?php echo $row->kehadiran; ?></span>
                      </td>
                      <td>
                          <?php if($row->status == 'Masuk'){ ?>
                          <span class="badge badge-pill badge-success"><?php echo $row->status ?></span>

                            <?php }else{ ?>
                          <span class="badge badge-pill badge-danger"><?php echo $row->status ?></span>

                                <?php }?>
                      </td>
                     
                  </tr>
                  <?php $no++;}?>
                  </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>   <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>

  </div>
 <script>
     $(".dttable").DataTable();
 </script>

  <?php 
    $this->load->view('assets/bawah');
  ?>