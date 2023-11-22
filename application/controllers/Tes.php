<?php
defined('BASEPATH') or exit('No direct script access allowed');




class Tes extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'akreditasi' => $this->input->post('akreditasi'),
    ];
    $this->session->set_userdata($data);
    $this->load->view("layout/htes");
    $this->load->view('tes/vw_tes');
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'akreditasi' => $this->input->post('akreditasi'),
    ];
    $this->session->set_userdata($data);
    $this->load->view("layout/htes");
    $this->load->view('tes/tambah_test');
    $this->load->view("layout/footer");
  }
  function upload()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'akreditasi' => $this->input->post('akreditasi'),
    ];
    $this->Perpus_model->insert($data);
    redirect('perpus');
  }
}


/* End of file Tes.php */
/* Location: ./application/controllers/Tes.php */