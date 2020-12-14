<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('m_profil');
        $this->load->library('session');
   }

    public function index()
    {
        $nis = $_SESSION['nis'];
        $data['title']='Biodata';
        $csiswa = $this->m_profil->cekSiswa($nis);
        
        $data['data_pengguna'] = $this->m_profil->cekPengguna($nis);
        $this->load->view('template/siswa/headerProfil',$data);
		$this->load->view('siswa/v_biodata',$data);
		//$this->load->view('template/siswa/footer',$data);
        
    }

    public function submit(){
        $data['title']='Form Biodata Siswa';

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jk', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('nis', 'nis', 'required');
        $this->form_validation->set_rules('kls', 'kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/siswa/headerProfil',$data);
            $this->load->view('siswa/v_biodata',$data);
            //$this->load->view('template/siswa/footer',$data);
        } else {
            $this->m_profil->update();
            //$this->session->sess_destroy();
            $this->session->set_flashdata('flash-data','disimpan');
            $nis = $_SESSION['nis'];
            redirect("siswa/biodata", 'refresh');
        }
    }
}


?>