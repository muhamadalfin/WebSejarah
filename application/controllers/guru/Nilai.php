<?php
class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') !=true) {
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_nilai');
    }
    public function index()
    {
        $x['nilai_siswa']=$this->m_nilai->get_all_nilai();
        $this->load->view('guru/v_nilai', $x);
    }
}
