<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    function index(){
        $this->load->view('admin/v_login');
    }
    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $status=strip_tags(str_replace("'", "", $this->input->post('status')));
        $u=$username;
        $p=$password;
        $s=$status;
        $cadmin=$this->m_login->cekadmin($u,$p,$s);
            echo json_encode($cadmin);
            if($cadmin->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$u);
            $xcadmin=$cadmin->row_array();
            if($xcadmin['pengguna_level'] == '1'){
                $this->session->set_userdata('akses','1');
                $idadmin=$xcadmin['pengguna_id'];
                $user_nama=$xcadmin['pengguna_nama'];
                $this->session->set_userdata('idadmin',$idadmin);
                $this->session->set_userdata('nama',$user_nama);
                redirect('admin/dashboard');
            }else if($xcadmin['pengguna_level']=='2'){
                $this->session->set_userdata('akses','2');
                $idadmin=$xcadmin['pengguna_id'];
                $user_nama=$xcadmin['pengguna_nama'];
                $nip=$xcadmin['nis_nip_nik'];
                $pass=$xcadmin['pengguna_password'];
                $this->session->set_userdata('idadmin',$idadmin);
                $this->session->set_userdata('nama',$user_nama);
                $this->session->set_userdata('nip',$nip);
                $this->session->set_userdata('password',$pass);
                redirect('admin/dashboard');
            }else if($xcadmin['pengguna_level']=='3'){
                $this->session->set_userdata('akses','3');
                $idadmin=$xcadmin['pengguna_id'];
                $user_nama=$xcadmin['pengguna_nama'];
                $nis=$xcadmin['nis_nip_nik'];
                $pass=$xcadmin['pengguna_password'];
                $this->session->set_userdata('idadmin',$idadmin);
                $this->session->set_userdata('nama',$user_nama);
                $this->session->set_userdata('nis',$nis);
                $this->session->set_userdata('password',$pass);
                redirect('siswa/home');
            }else{
                $this->session->set_userdata('akses','4');
                $idadmin=$xcadmin['pengguna_id'];
                $user_nama=$xcadmin['pengguna_nama'];
                $pass=$xcadmin['pengguna_password'];
                $this->session->set_userdata('idadmin',$idadmin);
                $this->session->set_userdata('nama',$user_nama);
                $this->session->set_userdata('password',$pass);
                redirect('home');
            }

            }else{
                echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
                redirect('admin/login');
            }

        /*if($status = ""){
            $cadmin=$this->m_login->cekadmin($u,$p);
            echo json_encode($cadmin);
            if($cadmin->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$u);
            $xcadmin=$cadmin->row_array();
            if($xcadmin){
                $this->session->set_userdata('akses','1');
                $idadmin=$xcadmin['pengguna_id'];
                $user_nama=$xcadmin['pengguna_nama'];
                $this->session->set_userdata('idadmin',$idadmin);
                $this->session->set_userdata('nama',$user_nama);
                redirect('admin/dashboard');
            }else if($xcadmin['pengguna_level']=='2'){
                $this->session->set_userdata('akses','2');
                $idadmin=$xcadmin['pengguna_id'];
                $user_nama=$xcadmin['pengguna_nama'];
                $this->session->set_userdata('idadmin',$idadmin);
                $this->session->set_userdata('nama',$user_nama);
                redirect('admin/dashboard');
            }

            }else{
                echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
                redirect('admin/login');
            }
        }
        else if($status = "siswa"){
            $csiswa=$this->m_login->ceksiswa($u,$p);
            echo json_encode($csiswa);
            if($csiswa->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$u);
            $xcsiswa=$csiswa->row_array();
                if($xcsiswa){
                    $idsiswa=$xcsiswa['siswa_id'];
                    $user_nama=$xcsiswa['siswa_nama'];
                    $this->session->set_userdata('idadmin',$idsiswa);
                    $this->session->set_userdata('nama',$user_nama);
                    redirect('siswa/home');
                }
            }else {
                echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
                redirect('admin/login');
            }

        }else {
            $cguru=$this->m_login->cekguru($u,$p);
            echo json_encode($cguru);
            if($cguru->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$u);
            $xcguru=$cguru->row_array();
                if($xcsiswa){
                    $idguru=$xcguru['guru_id'];
                    $user_nama=$xcguru['guru_nama'];
                    $this->session->set_userdata('idguru',$idguru);
                    $this->session->set_userdata('nama',$user_nama);
                    redirect('siswa/home');
                }
            }else {
                echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
                redirect('admin/login');
            }
        }*/       

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('Home');
    }
}
