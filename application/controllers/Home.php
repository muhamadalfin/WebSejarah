<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
			$x['title'] = 'Home';	
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
			$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$this->load->view('template/header',$x);
			$this->load->view('depan/v_home',$x);
			$this->load->view('template/footer',$x);

	}

}
