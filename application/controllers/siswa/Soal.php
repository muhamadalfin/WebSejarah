<?php
class Soal extends CI_Controller{
	function __construct(){
		parent::__construct();
		//$this->load->model('M_soal');
		$this->load->library('session');
	}
	function index(){
        $x['title'] = 'Soal';
        $this->load->view('template/siswa/header',$x);
		$this->load->view('siswa/v_soal',$x);
		//$this->load->view('depan/v_about',$x);
	    $this->load->view('template/siswa/footer',$x);
	}
}
