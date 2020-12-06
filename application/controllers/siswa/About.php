<?php
class About extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
        $x['title'] = 'About';
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$this->load->view('template/siswa/header',$x);
		$this->load->view('siswa/v_about',$x);
		$this->load->view('template/siswa/footer',$x);
	}
}
