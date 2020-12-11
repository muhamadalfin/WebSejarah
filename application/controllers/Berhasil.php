<?php
class Berhasil extends CI_Controller{
	function __construct(){
		parent::__construct();
		//$this->load->model('M_soal');
		$this->load->library('session');
	}
	function index(){
		$x['title'] = 'Berhasil';
		//$this->load->view('template/siswa/header',$x);
		$this->load->view('depan/v_berhasil',$x);
		//$this->load->view('depan/v_about',$x);
		//$this->load->view('template/siswa/footer',$x);
	}
}
