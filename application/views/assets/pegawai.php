
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
            <h1 class="m-0">Data Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main/index">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
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
                <h3 class="card-title">Data  Pegawai</h3>

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
                          <th>QRCODE</th>
                          <th>NIP</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>JK</th>
                          <th>Tempat Tanggal Lahir</th>
                          <th>No.HP</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    $q = $this->db->query("select karyawan.*,jabatan.jabatan from karyawan inner join jabatan on jabatan.id = karyawan.idjabatan");
                    foreach($q->result() as $row){
                  ?>
                  <tr>
                      <td><?php echo $no; ?></td>
                      <td>
                          <img src="qr/<?php echo $row->qr ?>" class="img img-fluid img-thumbnail" width="100" alt="">
                      </td>
                      <td><?php echo $row->nip; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->jabatan; ?></td>
                      <td><?php echo $row->jk; ?></td>
                      <td><?php echo $row->tempat_lahir.','.$row->tgl_lhr; ?></td>
                      <td><?php echo $row->telp; ?></td>
                      <td><?php echo $row->email; ?></td>
                      <td><?php echo $row->alamat; ?></td>
                      <td>
                          <a href="main/hapuspegawai/<?php echo $row->id;  ?>" class="btn btn-danger btn-sm hapus"><i class="fa fa-trash"></i></a>
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
    $(".hapus").click(function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Hapus Data ?',
                        text: "Data yang sudah dihapus tidak bisa kembali !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yaa, hapus data !'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
							url:  $(this).attr('href'),
							type: 'post',
							data: $(this).serialize(),
							dataType: "html",
							success: function(dt){
							  Swal.fire({
                    title: "Informasi",
                    text: "Data berhasil dihapus!",
                    icon: "success",
                    showCancelButton: false,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true,
                    allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                        window.location.reload();

                    })
							},
							error: function(dt){
								$.notify("Ada Kesalahan Sistem","warning");
							},
						});
                    } else return false;
                    })
						
			}); 
     $(".dttable").DataTable();
 </script>

  <?php 
    $this->load->view('assets/bawah');
  ?>