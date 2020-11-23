<?php
class Registrasi extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_registrasi');
    }
    function index(){
        $this->load->view('admin/v_registrasi');
    }
    
}
