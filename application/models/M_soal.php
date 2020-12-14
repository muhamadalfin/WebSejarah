<?php
class M_soal extends CI_Model
{
    public function get_all_soal()
    {
        $hsl=$this->db->query("SELECT * FROM tbl_soal");
        return $hsl;
    }
}
