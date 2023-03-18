
  <?php 
    $this->load->view('assets/atas');

    $pegawai =  $this->db->get('karyawan')->num_rows();
    $laki =  $this->db->query("select * from karyawan where jk='Laki-laki'")->num_rows();
    $cw =  $this->db->query("select * from karyawan where jk='Perempuan'")->num_rows();
    $jabatan = $this->db->get('jabatan')->num_rows();
    
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $pegawai ?></h3>

                <p>Pegawai</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $laki; ?></h3>

                <p>Pegawai Laki-laki</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $cw ?></h3>

                <p>Pegawai Perempuan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $jabatan; ?></h3>

                <p>Jabatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row --> 
        <div class="card">
  <div class="card-body">
    <div id="container"></div>
  </div>
</div>
     
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
<script>
  Highcharts.chart('container', {

chart: {
  styledMode: true
},

title: {
  text: 'Jumlah Pegawai Dan Jenis Kelamin'
},


series: [{
  type: 'pie',
  name: "Total",
  allowPointSelect: true,
  keys: ['name', 'y', 'selected', 'sliced'],
  data: [
    ['Pegawai', <?php echo $pegawai ?>, false],
    ['Laki-laki', <?php echo $laki ?>, false],
    ['Perempuan', <?php echo $cw ?>, false],
  ],
  showInLegend: true
}]
});
</script>
  <?php 
    $this->load->view('assets/bawah');
  ?>