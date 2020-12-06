<?php
class Jawab extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_soal');
	}
	function index(){
		$x['title'] = 'Jawaban Soal';
		$this->load->view('template/header',$x);
		$this->load->view('depan/v_jawab',$x);
		//$this->load->view('depan/v_about',$x);
		$this->load->view('template/footer',$x);
	}
}
