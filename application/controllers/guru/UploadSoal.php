<?php
class UploadSoal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') !=true) {
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_soal');
        $this->load->library('upload');
    }
    public function index()
    {
        $this->load->view('guru/v_uploadSoal');
    }

    public function submit(){
        $data['title']='Upload Soal';

        $this->form_validation->set_rules('token', 'token', 'required');
        $this->form_validation->set_rules('materi', 'materi', 'required');
        $this->form_validation->set_rules('soal', 'soal', 'required');
        $this->form_validation->set_rules('a', 'a', 'required');
        $this->form_validation->set_rules('b', 'b', 'required');
        $this->form_validation->set_rules('c', 'c', 'required');
        $this->form_validation->set_rules('d', 'd', 'required');
        $this->form_validation->set_rules('kc', 'kunci jawaban', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('guru/v_uploadSoal');
        } else {
            $this->m_soal->insert();
            $this->session->set_flashdata('flash-data','disimpan');
            redirect("guru/uploadSoal", 'refresh');
        }
    }
}
