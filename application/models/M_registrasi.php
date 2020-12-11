<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_registrasi extends CI_Model{
    function registrasi(){
        $data=[
            "pengguna_nama"=> $this->input->post('nama',true),
            "nis_nip_nik"=> $this->input->post('nis_nip',true),
            "pengguna_email"=> $this->input->post('email',true),
            "pengguna_username"=> $this->input->post('username',true),
            "pengguna_password"=> md5($this->input->post('password',true)),
            "pengguna_level"=> $this->input->post('level',true),
        ];
        $this->db->insert('tbl_pengguna',$data);
    }

}
