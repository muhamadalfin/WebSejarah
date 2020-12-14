<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('m_profil');
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
            redirect('siswa/biodata','refresh');
        }
    }

    
}


?>