<?php 
class M_nilai extends CI_Model{

    public function cekNilai($nis){
        $hasil=$this->db->query("SELECT * FROM tbl_nilai WHERE nis ='$nis'");
        return $hasil;
    }
	
}