<?php
class Nilai extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_nilai');
		$this->load->library('session');
    }
    
	function index(){
        $data['title'] = 'Nilai';
        $nis = $_SESSION['nis'];
        $data['nilai_siswa'] = $this->m_nilai->cekNilai($nis);
        $this->load->view('template/siswa/header',$data);
		$this->load->view('siswa/v_nilai',$data);
		//$this->load->view('depan/v_about',$x);
	    $this->load->view('template/siswa/footer',$data);
	}
}
