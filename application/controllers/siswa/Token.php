<?php
class Token extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_token');
    }
    
	function index(){
        $x['title'] = 'Token';
        $this->load->view('template/siswa/header',$x);
		$this->load->view('siswa/v_token',$x);
		//$this->load->view('depan/v_about',$x);
	    $this->load->view('template/siswa/footer',$x);
    }
    
}
