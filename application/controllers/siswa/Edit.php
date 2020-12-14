<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('m_edit');
        $this->load->library('session');
   }

    public function index()
    {
        $nis = $_SESSION['nis'];
        $data['title']='Profil';
        $csiswa = $this->m_profil->cekSiswa($nis);
        //$data['siswa'] = $this->m_profil->cekSiswa($nis);
        //echo json_encode($csiswa);
        if($csiswa->num_rows() > 0){
            $xcsiswa=$csiswa->row_array();
            if($xcsiswa['siswa_nis'] == $nis){
            $data['data_siswa'] = $this->m_profil->cekSiswa($nis);
            $data['data_pengguna'] = $this->m_profil->cekPengguna($nis);
            $this->load->view('template/siswa/headerProfil',$data);
			$this->load->view('siswa/v_profil',$data);
            $this->load->view('template/siswa/footer',$data);
            }
        }else{
            $this->load->view('template/siswa/headerProfil',$data);
			$this->load->view('siswa/v_biodata',$data);
			//$this->load->view('template/siswa/footer',$data);
        }
    }

    public function edit($nis){
        $data['title']='Form Edit Data user';
        $data['data_siswa'] = $this->m_edit->getsiswaByID($nis);
        $data['data_pengguna'] = $this->m_edit->getpenggunaByID($nis);

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jk', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('nis', 'nis', 'required');
        $this->form_validation->set_rules('kls', 'kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/siswa/headerProfil',$data);
            $this->load->view('siswa/v_edit',$data);
            //$this->load->view('template/siswa/footer',$data);
        } else {
            $this->m_edit->update();
            //$this->session->sess_destroy();
            $this->session->set_flashdata('flash-data','diedit');
            $nis = $_SESSION['nis'];
            redirect("siswa/edit/edit/$nis", 'refresh');
        }
    }
}


?>