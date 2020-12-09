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
        if($csiswa){
            $data['data_siswa'] = $this->m_profil->cekSiswa($nis);
            $this->load->view('template/siswa/headerProfil',$data);
			$this->load->view('siswa/v_profil',$data);
			$this->load->view('template/siswa/footer',$data);
        }else{
            $this->load->view('template/siswa/headerDownload',$data);
			$this->load->view('siswa/v_profil',$data);
			$this->load->view('template/siswa/footer',$data);
        }
    }

    public function detail($id_user)
    {
    
        $data['title']='Detail User';
        $data['pengunjung'] = $this->Admin_model->getuserByID($id_user);
        $this->load->view('template/header',$data);
        $this->load->view('administrator/detail',$data);
    }

    public function hapus($id_user){
        $this->Admin_model->hapusdatauser($id_user);
        //untuk flash data mempunyai 2 param
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('administrator','refresh');
    }



    public function edit($id_user){
        $data['title']='Form Edit Data user';
        $data['user'] = $this->Admin_model->getuserByID($id_user);
        $data['status']=['on','off'];
        $data['admin']=['admin','user'];

        $this->form_validation->set_rules('nama', 'nama', 'required');
        //$this->form_validation->set_rules('telephone', 'telephone');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');
        //$this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('administrator/edit',$data);
            //$this->load->view('template/footer');
        } else {
            $this->Admin_model->ubahdatauser();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','diedit');
            redirect('administrator','refresh');
        }
    }
}


?>