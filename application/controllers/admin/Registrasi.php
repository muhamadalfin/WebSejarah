<?php
class Registrasi extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_registrasi');
    }
    function index(){
        $this->load->view('admin/v_registrasi');
    }
    function aksi_registrasi(){
        $this->m_registrasi->registrasi();
        echo $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Registrasi Berhasil</div>');
        redirect('admin/login');
    }
}
