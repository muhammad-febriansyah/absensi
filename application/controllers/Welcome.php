<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');
		date_default_timezone_set('Asia/Jakarta');
		
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function cekid()
	{
		$username=clear($_POST['username']);
		$password=clear($_POST['password']);
		$q=$this->db->query("select * from admin where  username='$username' and password=md5(md5(md5('$password')))");
		if($q->num_rows()>0){
			$row=$q->row();
			$data = array(
					'id'  => $row->id,
					'nama'     => $row->nama,
					'level' => $row->level,
					'telp' => $row->telp,
					'status'	=> $row->status,
					'role'	=> 1
			);
			$this->session->set_userdata($data);
			$ip= $this->input->ip_address();
			$nama = $this->session->userdata('nama');
			$this->db->query("insert into history values('','$nama',' Telah melakukan login',now(),'$ip')");
			echo 'main/index';
		}else{
			$q=$this->db->query("select * from karyawan where  username='$username' and password=md5(md5(md5('$password')))");
			if($q->num_rows() > 0){
				$row = $q->row();
				$data = [
					'id'	=> $row->id,
					'nama'	=> $row->nama,
					'idkaryawan'=> $row->idkaryawan,
					'role'	=> 2
				];
				$this->session->set_userdata($data);
				$ip= $this->input->ip_address();
				$nama = $this->session->userdata('nama');
				$this->db->query("insert into history values('','$nama',' Telah melakukan login',now(),'$ip')");
				echo 'pegawai/kartu';
			}else{
				echo false;
			}
		}

	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		$ip= $this->input->ip_address();
		$nama = $this->session->userdata('nama');
		$this->db->query("insert into history values('','$nama',' Terakhir Login Pada',now(),'$ip')");
		redirect('welcome/index');
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}


	public function sendotp()
	{
		$kode = random_int(100000, 999999);

		$this->load->library('ciqrcode');
		$config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './qr/'; //string, the default is application/cache/
        $config['errorlog']     = './qr/'; //string, the default is application/logs/
        $config['imagedir']     = './qr/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$kode.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $kode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // \ untuk generate QR CODE


		$nip = clear($_POST['nip']);
		$nama = clear($_POST['nama']);
		$jk = clear($_POST['jk']);
		$tempat_lahir = clear($_POST['tempat_lahir']);
		$tgl_lhr = clear($_POST['tgl_lhr']);
		$telp = clear($_POST['telp']);
		$email = clear($_POST['email']);
		$agama = clear($_POST['agama']);
		$idjabatan = clear($_POST['idjabatan']);
		$idshift = clear($_POST['idshift']);
		$idgedung = clear($_POST['idgedung']);
		$username = clear($_POST['username']);
		$password = clear($_POST['password']);
		$alamat = clear($_POST['alamat']);
		// $umur = new DateTime($tempat_lahir);
		// $today = new DateTime("today");
		// $sekarang = $today->diff($umur)->y;
		$otp = random_int(100000, 999999);

		$query = $this->db->query("INSERT INTO karyawan VALUES('','$kode','$nip','$nama','$jk','$tempat_lahir','$tgl_lhr','','$telp','$email',
		'$agama','$idjabatan','$idshift','$idgedung','$username',md5(md5(md5('$password'))),'$otp','0','$alamat','$image_name'
		)");

		if($query){
			$this->load->library('PHPMailer_load'); //Load Library PHPMailer
        $mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail
        $mail->isSMTP();  // Mengirim menggunakan protokol SMTP
        $mail->Host = 'smtp.gmail.com'; // Host dari server SMTP
        $mail->SMTPAuth = true; // Autentikasi SMTP
		$mail->Username = 'sicakalang@gmail.com';
        $mail->Password = 'sicakalang121#@';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('sicakalang@gmail.com', 'Kode OTP'); // Sumber email
		$mail->addAddress($email);
        $mail->Subject = "Kode OTP Anda $otp"; // Subjek Email
        $mail->msgHtml("
        Selamat anda berhasil mendaftar silahkan isi kode OTP anda sebagai berikut : $otp
        <br>
            "); // Isi email dengan format HTML
    
        if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    //echo "Message sent!";
                } // Kirim email dengan cek kondisi
		}else{
			echo false;
		}
	}


	public function otp()
	{
		$this->load->view('otp');
	}

	public function getstatus()
	{
		$otp = clear($_POST['otp']);
		$query = $this->db->query("select * from karyawan where otp='$otp'");
		if($query->num_rows() > 0){
			$this->db->query("update karyawan set status='1' where otp='$otp'");
			echo "welcome/index";
		}else{
			echo false;
		}
	}

}
