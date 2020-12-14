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

    function update(){
        $idpengguna = $this->input->post('penggunaid');
        $nis = $this->input->post('nis');

        $data1=[
            "pengguna_id"=> $this->input->post('penggunaid',true),
            "pengguna_nama"=> $this->input->post('nama',true),
            "nis_nip_nik"=> $this->input->post('nis',true),
            "pengguna_email"=> $this->input->post('email',true),
            "pengguna_username"=> $this->input->post('username',true),
            "pengguna_jenkel"=> $this->input->post('jk',true),
        ];
        $data2=[
            "siswa_nis"=> $this->input->post('nis',true),
            "siswa_nama"=> $this->input->post('nama',true),
            "siswa_jenkel"=> $this->input->post('jk',true),
            "siswa_kelas_id"=> $this->input->post('kls',true),
        ];
        $this->db->update('tbl_pengguna', $data1, ['pengguna_id' => $idpengguna]);
        $this->db->insert('tbl_siswa',$data2);
        $this->session->set_userdata('nis',$nis);
        //$_SESSION['nis'] = $nis;
    }
	
}