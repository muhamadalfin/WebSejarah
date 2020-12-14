<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengunjung');
    }
    public function index()
    {
        $x['title'] = 'Dashboard';
       // $this->load->view('template/siswa/header',$x);
		$this->load->view('guru/v_dashboard',$x);
		//$this->load->view('depan/v_about',$x);
	   // $this->load->view('template/siswa/footer',$x);
    }
}
