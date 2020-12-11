<?php 
class M_profil extends CI_Model{

    public function cekSiswa($nis){
        $hasil=$this->db->query("SELECT * FROM tbl_siswa WHERE siswa_nis ='$nis'");
        return $hasil;
    }
    
    public function cekPengguna($nis){
        $hasil=$this->db->query("SELECT * FROM tbl_pengguna WHERE nis_nip_nik ='$nis'");
        return $hasil;
    }

    public function cek($nis){
        //$hasil=$this->db->query("SELECT * FROM tbl_siswa WHERE siswa_nis ='$nis'");
        //return $hasil;
        $this->db->select('s.siswa_id, s.siswa_nis, s.siswa_nama, s.siswa_jenkel, s.siswa_kelas_id');
        $this->db->from('tbl_siswa s');
        $this->db->join('tbl_pengguna p','p.nis_nip = s.siswa_nis');
        //$this->db->join('kamar k','k.id_kamar = r.id_kamar');
        //$this->db->where('r.id_pengunjung', $id);
        $this->db->like('p.nis_nip',$nis);
        //$this->db->or_like('p.ktp',$keyword);
        $query = $this->db->get();
        return $query;
    }
	
}