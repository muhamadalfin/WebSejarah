<?php
class M_soal extends CI_Model
{
    public function get_all_soal()
    {
        $hsl=$this->db->query("SELECT * FROM tbl_soal");
        return $hsl;
    }

    function insert(){
        $data=[
            "materi"=> $this->input->post('materi',true),
            "soal"=> $this->input->post('soal',true),
            "a"=> $this->input->post('a',true),
            "b"=> $this->input->post('b',true),
            "c"=> $this->input->post('c',true),
            "d"=> $this->input->post('d',true),
            "knc_jawaban"=> $this->input->post('kc',true),
            "token"=> $this->input->post('token',true),
        ];
        $this->db->insert('tbl_soal',$data);
    }
}
