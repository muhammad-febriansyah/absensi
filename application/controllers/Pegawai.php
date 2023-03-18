<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        if(!$this->session->userdata('id')){
            redirect('welcome/','refresh');
        }
    }
    
    public function index()
    {
        $this->load->view('pegawai/index');
    }

    public function history()
    {
        $this->load->view('pegawai/history');
    }

    public function kartu()
    {
        $this->load->view('pegawai/kartu');
    }

}

/* End of file Pegawai.php */
