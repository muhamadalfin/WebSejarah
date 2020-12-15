<?php 
class M_nilai extends CI_Model{

    public function cekNilai($nis){
        $hasil=$this->db->query("SELECT * FROM tbl_nilai WHERE nis ='$nis'");
        return $hasil;
    }

    public function get_all_nilai(){
        $this->db->select('s.siswa_id, s.siswa_nis, s.siswa_nama, s.siswa_jenkel, s.siswa_kelas_id, n.nilai');
        $this->db->from('tbl_siswa s');
        $this->db->join('tbl_nilai n','n.nis = s.siswa_nis');
        $query = $this->db->get();
        return $query;
    }
	
}