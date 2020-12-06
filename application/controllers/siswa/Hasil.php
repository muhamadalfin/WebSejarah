<?php
class Hasil extends CI_Controller{
	function __construct(){
		parent::__construct();
		//$this->load->model('M_soal');
		$this->load->library('session');
	}
	function index(){
		$x['title'] = 'Score';
		$this->load->view('template/siswa/header',$x);
		$this->load->view('siswa/v_hasil',$x);
		//$this->load->view('depan/v_about',$x);
		$this->load->view('template/siswa/footer',$x);
	}
}
