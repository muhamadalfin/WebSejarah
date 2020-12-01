<?php

class UnitTesting extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('unit_test');
    }
    

    private function login($username, $password){
        $u=$username;
        $p=$password;
        $query=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_username='$u' AND pengguna_password=md5('$p')");
        if( $query->num_rows() > 0 )
        {
            $hasil = $query->row_array();
        }
        $cekHasil = $hasil['pengguna_nama'];
        if($cekHasil == "Admin"){
            $status = True;
        }else{
            $status = False;
        }
        return $status;
    }

    public function cekLogin(){
        $test = $this->login("admin","admin");
        $expected_result = True;
        $test_name = "Cek Login Codeigniter";
        
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    private function siswa($nama){
        $query=$this->db->query("SELECT * FROM tbl_siswa WHERE siswa_nama = '$nama'");
        if( $query->num_rows() > 0 )
        {
            $hasil = $query->row_array();
        }
        $cekHasil = $hasil['siswa_nis'];
        return $cekHasil;
    }

    public function cekSiswa(){
        $test = $this->siswa("Nadila Ginting");
        $expected_result = "12308";
        $test_name = "Cek Login Codeigniter";
        
        echo $this->unit->run($test, $expected_result, $test_name);
    }


    private function cekString($kalimat){
        
        return is_string($kalimat);
    }

    public function cek(){
        $test = $this->cekString(123);
        $expected_result = True;
        $test_name = "Cek String Codeigniter";
        
        echo $this->unit->run($test, $expected_result, $test_name);
    }

}

?>