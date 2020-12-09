<?php 
class M_profil extends CI_Model{

    public function cekSiswa($nis){
        $hasil=$this->db->query("SELECT * FROM tbl_siswa WHERE siswa_nis ='$nis'");
        return $hasil;
    }
	
}