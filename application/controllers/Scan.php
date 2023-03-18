<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Scan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');

    }
    
    public function index()
    {
        $this->load->view('assets/layar');
    }

    public function cek_id()
    {
		$result_code = $this->input->post('idkaryawan');
		$tgl = date('Y-m-d');
		$jam_msk = date('h:i:s');
		$jam_klr = date('h:i:s');
		$cek_id = $this->main_model->cek_id($result_code);
		$cek_kehadiran = $this->main_model->cek_kehadiran($result_code, $tgl);
        // $cek_jam = $this->main_model->cek_jam($result_code);
		if (!$cek_id) {
            $this->session->set_flashdata('msg', 'error');
            redirect('scan/','refresh');
		} elseif ($cek_kehadiran && $cek_kehadiran->masuk != '00:00:00' && $cek_kehadiran->keluar == '00:00:00' && $cek_kehadiran->idstatus == 1) {
			$data = array(
				'keluar' => $jam_klr,
				'idstatus' => 2,
			);
			$this->main_model->absen_pulang($result_code, $data);
            $this->session->set_flashdata('msg', 'pulang');
            redirect('scan/','refresh');
		} elseif ($cek_kehadiran && $cek_kehadiran->masuk != '00:00:00' && $cek_kehadiran->keluar != '00:00:00' && $cek_kehadiran->idstatus == 2) {
            $this->session->set_flashdata('msg', 'sudah');
            redirect('scan/','refresh');
			return false;
		} else {
			$data = array(
				'idkaryawan' => $result_code,
				'tgl' => $tgl,
				'masuk' => $jam_msk,
				'idkehadiran' => 1,
				'idstatus' => 1,
			);
			$this->main_model->absen_masuk($data);
            $this->session->set_flashdata('msg', 'masuk');
            redirect('scan/','refresh');
		}
    }

}

/* End of file Scan.php */
