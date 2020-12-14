<?php
class UploadSoal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') !=true) {
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_soal');
        $this->load->library('upload');
    }
    public function index()
    {
        $x['data']=$this->m_soal->get_all_soal();
        $this->load->view('guru/v_upload', $x);
    }
}
