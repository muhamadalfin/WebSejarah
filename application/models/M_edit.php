<?php 
class M_edit extends CI_Model{

    public function getsiswaByID($nis){
        $hasil=$this->db->query("SELECT * FROM tbl_siswa WHERE siswa_nis ='$nis'");
        return $hasil->result();
    }
    
    public function getpenggunaByID($nis){
        $hasil=$this->db->query("SELECT * FROM tbl_pengguna WHERE nis_nip_nik ='$nis'");
        return $hasil->result();
    }

    function update(){
        $idsiswa = $this->input->post('siswaid');
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
            "siswa_id"=> $this->input->post('siswaid',true),
            "siswa_nis"=> $this->input->post('nis',true),
            "siswa_nama"=> $this->input->post('nama',true),
            "siswa_jenkel"=> $this->input->post('jk',true),
            "siswa_kelas_id"=> $this->input->post('kls',true),
        ];
        $this->db->update('tbl_pengguna', $data1, ['pengguna_id' => $idpengguna]);
        $this->db->update('tbl_siswa',$data2, ['siswa_id' => $idsiswa]);
        $this->session->set_userdata('nis',$nis);
        //$_SESSION['nis'] = $nis;
    }

	
}