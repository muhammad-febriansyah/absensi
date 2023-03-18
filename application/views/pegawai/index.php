
  <?php 
    $this->load->view('pegawai/atas');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Status</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main/index">Home</a></li>
              <li class="breadcrumb-item active">Data Status</li>
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
                <h3 class="card-title">My Profile</h3>

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
                          <th>Status</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $q = $this->db->get('status');
                    foreach($q->result() as $row){
                  ?>
                  <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row->status; ?></td>
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
    $this->load->view('pegawai/bawah');
  ?>