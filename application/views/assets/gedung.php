
  <?php 
    $this->load->view('assets/atas');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Lokasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main/index">Home</a></li>
              <li class="breadcrumb-item active">Data Lokasi</li>
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
       <div class="row">
       <div class="col-md-5">
        <div class="card card-outline card-dark">
              <div class="card-header">
                <h3 class="card-title">Entri Lokasi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" id="entri">
             
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>   <!-- /.row -->
          <div class="col-md-6">
        <div class="card card-outline card-dark">
              <div class="card-header">
                <h3 class="card-title">Data Lokasi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" id="get">
             
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>   <!-- /.row -->
    
       </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>


  </div>
 <script>
     $(".dttable").DataTable();
 </script>
<script>
    $("#entri").load("main/entrigedung");
    $("#get").load("main/loadgedung");
</script>
  <?php 
    $this->load->view('assets/bawah');
  ?>