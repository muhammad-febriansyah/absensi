<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        $this->load->model('main_model');
        if(!$this->session->userdata('id')){
            redirect('welcome/','refresh');
        }
        
    }
    
    public function index()
    {
        $this->load->view('assets/index');
    }
    
    public function status(){
        $this->load->view('assets/status');
    }


    public function loadjabatan()
    { ?>
             <table width='100%' class='table table-sm table-hover table-bordered dttable'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $q = $this->db->query("select * from jabatan ");
                            foreach($q->result() as $row){              
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->jabatan; ?></td>
                            <td>
                                <a href="main/hapusjabatan/<?php echo $row->id ?>" class="btn btn-danger btn-sm hapus"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                  </table>
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
                                Swal.fire(
                                    'Informasi',
                                    'Data berhasil dihapus !',
                                    'success'
                                );
                                $("#entri").load("main/entrijabatan");
    $("#get").load("main/loadjabatan");
                            },
                            error: function(dt){
                                $.notify("Ada Kesalahan Sistem","warning");
                            },
                        });
                    } else return false;
                    })
                        
            }); 
       $('.dttable').DataTable();
 </script>
 <?php    }
    
    public function entrijabatan()
    { ?>
     <form method="post" action="main/savekab" id="save">
                        
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Jabatan</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" required name="a"autocomplete='off' placeholder="Nama Jabatan" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                         <input type="submit" name="save" value="SIMPAN" class='btn btn-success btn-lg btn-block' />
 
                         </div>
                    </form>
                    <script>
                           $("#save").on("submit",function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (response) {
               
                $.notify("Berhasil Simpan", "success");
                $("#entri").load("main/entrijabatan");
    $("#get").load("main/loadjabatan");
            },
            error : function (e){
                $.notify("Gagal Simpan", "error");
            }
        });
    });
    
                    </script>
   <?php }
 
     public function savekab()
     {
         $a = clear($_POST['a']);
         $this->db->query("insert into jabatan values('','$a')");
         echo true;
     }
 
     public function hapusjabatan($id='')
     {
        $this->db->query("delete from jabatan where id='$id'");
        echo true;
     }

    public function jabatan()
    {
        $this->load->view('assets/jabatan');
    }


    public function shift()
    {
        $this->load->view('assets/shift');
    }

    public function loadshift()
    { ?>
             <table width='100%' class='table table-sm table-hover table-bordered dttable'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>shift</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $q = $this->db->query("select * from shift ");
                            foreach($q->result() as $row){              
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->shift; ?></td>
                            <td>
                                <a href="main/hapusshift/<?php echo $row->id ?>" class="btn btn-danger btn-sm hapus"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                  </table>
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
                                Swal.fire(
                                    'Informasi',
                                    'Data berhasil dihapus !',
                                    'success'
                                );
                                $("#entri").load("main/entrishift");
    $("#get").load("main/loadshift");
                            },
                            error: function(dt){
                                $.notify("Ada Kesalahan Sistem","warning");
                            },
                        });
                    } else return false;
                    })
                        
            }); 
       $('.dttable').DataTable();
 </script>
 <?php    }
    
    
    public function entrishift()
    { ?>
     <form method="post" action="main/saveshift" id="save">
                        
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Shift</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" required name="a"autocomplete='off' placeholder="Nama Shift" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                         <input type="submit" name="save" value="SIMPAN" class='btn btn-success btn-lg btn-block' />
 
                         </div>
                    </form>
                    <script>
                           $("#save").on("submit",function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (response) {
               
                $.notify("Berhasil Simpan", "success");
                $("#entri").load("main/entrishift");
    $("#get").load("main/loadshift");
            },
            error : function (e){
                $.notify("Gagal Simpan", "error");
            }
        });
    });
    
                    </script>
   <?php }
    
    public function saveshift()
    {
        $a = clear($_POST['a']);
        $this->db->query("insert into shift values('','$a')");
        echo true;
    }

    public function hapusshift($id='')
    {
       $this->db->query("delete from shift where id='$id'");
       echo true;
    }

    public function gedung()
    {
        $this->load->view('assets/gedung');
    }

    public function entrigedung()
    { ?>
         <form method="post" action="main/savegedung" id="save">
                        
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Lokasi</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" required name="a"autocomplete='off' placeholder="Nama Lokasi" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" required name="b"autocomplete='off' placeholder="Nama Alamat" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                         <input type="submit" name="save" value="SIMPAN" class='btn btn-success btn-lg btn-block' />
 
                         </div>
                    </form>
                    <script>
                           $("#save").on("submit",function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (response) {
               
                $.notify("Berhasil Simpan", "success");
                $("#entri").load("main/entrigedung");
    $("#get").load("main/loadgedung");
            },
            error : function (e){
                $.notify("Gagal Simpan", "error");
            }
        });
    });
    
                    </script>
  <?php  }

    public function loadgedung()
    { ?>
           <table width='100%' class='table table-sm table-hover table-bordered dttable'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $q = $this->db->query("select * from gedung ");
                            foreach($q->result() as $row){              
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->gedung; ?></td>
                            <td><?php echo $row->alamat; ?></td>
                            <td>
                                <a href="main/hapusgedung/<?php echo $row->id ?>" class="btn btn-danger btn-sm hapus"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                  </table>
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
                                Swal.fire(
                                    'Informasi',
                                    'Data berhasil dihapus !',
                                    'success'
                                );
                                $("#entri").load("main/entrigedung");
    $("#get").load("main/loadgedung");
                            },
                            error: function(dt){
                                $.notify("Ada Kesalahan Sistem","warning");
                            },
                        });
                    } else return false;
                    })
                        
            }); 
       $('.dttable').DataTable();
 </script>
  <?php  }

    public function savegedung()
    {
        $a = clear($_POST['a']);
        $b = clear($_POST['b']);
        $this->db->query("insert into gedung values('','$a','$b')");
        echo true;
    }

    public function hapusgedung($id='')
    {
        $this->db->query("delete from gedung where id='$id'");
        echo true;
    }

    public function history()
    {
        $this->load->view('assets/history');
    }

    public function loadhistory()
    { ?>
             <table width='100%' class='table table-sm table-hover table-bordered dttable'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Info</th>
                            <th>Waktu</th>
                            <th>IP Address</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $q = $this->db->query("select * from history ");
                            foreach($q->result() as $row){              
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->info; ?></td>
                            <td><?php echo date('d F Y',strtotime($row->waktu)) .'/'.date('H:i',strtotime($row->waktu)) ?></td>
                            <td><?php echo $row->ip; ?></td>
                            <td>
                                <a href="main/hapushistory/<?php echo $row->id ?>" class="btn btn-danger btn-sm hapus"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                  </table>
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
								Swal.fire(
                                    'Informasi',
                                    'Data berhasil dihapus !',
                                    'success'
                                );
								$("#get").load("main/loadhistory");
							},
							error: function(dt){
								$.notify("Ada Kesalahan Sistem","warning");
							},
						});
                    } else return false;
                    })
						
			}); 
   	$('.dttable').DataTable();
</script>
<?php    }
public function hapushistory($id='')
{
    $this->db->query("delete from history where id='$id'");
    echo true;
}

    public function historyabsen()
    {
        $this->load->view('assets/historyabsen');
    }

    public function pergedung($id)
    {
        $data['id'] = $id;
        $this->load->view('assets/pergedung', $data, FALSE);
        
    }

    public function karyawan()
    {
        $this->load->view('assets/pegawai');
    }

    public function hapuspegawai($id='')
    {
        $q = $this->db->query("select * from karyawan where id='$id'");
        $row = $q->row();
        unlink("./qr/$row->qr");
        $this->db->query("delete from karyawan where id='$id'");
        echo true;
    }

    
    public function backup()
	{ 
		$idtoko=$this->session->userdata('id');
		$nama=$idtoko.'_'.date('Y-m-d_H-i').'.sql';
		$prefs = array(
			'ignore'     => array(),
			'format'     => 'txt',
			'filename'   => "$nama",
			'add_drop'   => TRUE, 
			'add_insert' => TRUE,
			'newline'    => "\n"
		);
		$this->load->dbutil();
		$backup =$this->dbutil->backup($prefs); 
		$this->load->helper('file');
		write_file("backup/$nama", $backup);
		//$this->load->helper('download');
		//force_download("$nama", $backup);
		echo true;
	}

    public function import()
    {
        $this->load->view('assets/import');
    }
    public function restoredb($data='')
	{
	  $isi_file = file_get_contents("./backup/$data");
	  $string_query = rtrim( $isi_file, "\n;" );
	  $array_query = explode(";", $string_query);
	  foreach($array_query as $query)
	  {
		$this->db->query($query);
	  }
	  echo true;

	}

    public function setting()
    {
        $this->load->view('assets/setting');
    }

    public function updatesetting()
    {
        $a = clear($_POST['a']);
        $b = clear($_POST['b']);
        $c = clear($_POST['c']);
        $d = clear($_POST['d']);
        $e = clear($_POST['e']);
        $f = clear($_POST['f']);
        $g = clear($_POST['g']);

        $this->db->query("UPDATE setting SET web='$a',keyword='$b',telp='$c',email='$d',yt='$e',fb='$f',ig='$g'");
        echo true;
    }

}

/* End of file Main.php */
