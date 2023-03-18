<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

    public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		function clear($x=''){
			$con = new mysqli("localhost", "root", "", "fg_absen");
			$aman=mysqli_real_escape_string($con ,$x);
				return $aman;
		}

	
    }


	
    public function cek_kehadiran($idkaryawan, $tgl)
    {
        $query_str =
            $this->db->where('idkaryawan', $idkaryawan)
            ->where('tgl', $tgl)->get('absen');
        if ($query_str->num_rows() > 0) {
            return $query_str->row();
        } else {
            return false;
        }
    }
	
    public function cek_jam($idkaryawan)
    {
        $query_str =
            $this->db->where('idkaryawan', $idkaryawan)
            ->get('jam');
        if ($query_str->num_rows() > 0) {
            return $query_str->row();
        } else {
            return false;
        }
    }

	public function absen_masuk($data)
    {
        return $this->db->insert('absen', $data);
    }

	public function absen_pulang($idkaryawan, $data)
    {
        $tgl = date('Y-m-d');
        return $this->db->where('idkaryawan', $idkaryawan)
            ->where('tgl', $tgl)
            ->update('absen', $data);
    }


	public function cek_id($idkaryawan)
    {
        $query_str =
            $this->db->where('idkaryawan', $idkaryawan)
            ->get('karyawan');
        if ($query_str->num_rows() > 0) {
            return $query_str->row();
        } else {
            return false;
        }
    }


}

/* End of file Main_model.php */
