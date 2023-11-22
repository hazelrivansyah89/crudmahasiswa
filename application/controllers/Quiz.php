<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quiz extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {

    $this->load->view("layout/htes");
    $this->load->view('quiz/vw_quiz');
    $this->load->view("layout/footer");
  }
  public function magister()
  {

    $this->load->view("layout/htes");
    $this->load->view('quiz/magister');
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'nisn' => $this->input->post('nisn'),
      'nik' => $this->input->post('nik'),
      'email' => $this->input->post('email'),
      'no_hp' => $this->input->post('no_hp'),
      'no_wa' => $this->input->post('no_wa'),
      'tempat_lahir' => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'kabupaten_tinggal' => $this->input->post('kabupaten_tinggal'),
      'kecamatan_tinggal' => $this->input->post('kecamatan_tinggal'),
      'kabupaten_sekolah' => $this->input->post('kabupaten_sekolah'),
      'sekolah_asal' => $this->input->post('sekolah_asal'),
      'jurusan' => $this->input->post('jurusan'),
      'tahun_lulus' => $this->input->post('tahun_lulus')
    ];
    // $data['data']=$this->session->data();
    $this->session->set_userdata($data);
    $this->load->view("layout/htes");
    $this->load->view('quiz/tambah');
    $this->load->view("layout/footer");
    // redirect('Quiz/lihat');
  }
  public function lihat()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'nisn' => $this->input->post('nisn'),
      'nik' => $this->input->post('nik'),
      'email' => $this->input->post('email'),
      'no_hp' => $this->input->post('no_hp'),
      'no_wa' => $this->input->post('no_wa'),
      'tempat_lahir' => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'kabupaten_tinggal' => $this->input->post('kabupaten_tinggal'),
      'kecamatan_tinggal' => $this->input->post('kecamatan_tinggal'),
      'kabupaten_sekolah' => $this->input->post('kabupaten_sekolah'),
      'sekolah_asal' => $this->input->post('sekolah_asal'),
      'jurusan' => $this->input->post('jurusan'),
      'tahun_lulus' => $this->input->post('tahun_lulus')
    ];
    $this->session->set_userdata($data);
    $this->load->view("layout/htes");
    $this->load->view('quiz/data');
    $this->load->view("layout/footer");
  }

}


/* End of file Quiz.php */
/* Location: ./application/controllers/Quiz.php */
    // $data = [
    //   'nama' => $this->input->post('nama'),
    //   'ruangan' => $this->input->post('ruangan'),
    //   'akreditasi' => $this->input->post('akreditasi'),
    // ];
    // $this->session->set_userdata($data);