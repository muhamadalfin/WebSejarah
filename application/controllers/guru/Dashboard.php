<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') !=true) {
            $url=base_url('administrrator');
            redirect($url);
        };
        $this->load->model('m_pengunjung');
    }
    public function index()
    {
        if ($this->session->userdata('akses')=='2') {
            $x['visitor'] = $this->m_pengunjung->statistik_pengujung();
            $this->load->view('guru/v_dashboard', $x);
        } else {
            redirect('login');
        }
    }
}
