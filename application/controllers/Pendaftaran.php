<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('pendaftaran_form');
    }

    public function submit()
    {
        // Validasi form
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal
            $this->load->view('pendaftaran_form');
        } else {
            // Jika validasi berhasil
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'kelas' => $this->input->post('kelas'),
                'semester' => $this->input->post('semester'),
            );

            if ($this->Pendaftaran_model->insert_pendaftaran($data)) {
                $this->session->set_flashdata('success', 'Pendaftaran berhasil.');
                redirect('pendaftaran');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan. Silakan coba lagi.');
                redirect('pendaftaran');
            }
        }
    }
}
