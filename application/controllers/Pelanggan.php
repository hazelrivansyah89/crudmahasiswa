<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pelanggan_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Pelanggan";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['pelanggan'] = $this->Pelanggan_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("pelanggan/vw_pelanggan", $data);
    $this->load->view("layout/footer", $data);
    // 
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Pelanggan";
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['pelanggan'] = $this->Pelanggan_model->get();
    $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required', [
      'required' => 'Nama Pelanggan Wajib di isi'
    ]);
    $this->form_validation->set_rules('alamat', 'alamat', 'required', [
      'required' => 'alamat Pelanggan Wajib di isi'
    ]);
    $this->form_validation->set_rules('pesanan', 'pesanan', 'required', [
      'required' => 'pesanan Pelanggan Wajib di isi'
    ]);
    $this->form_validation->set_rules('banyak', 'banyak', 'required|integer', [
      'required' => 'banyak Pesanan Wajib di isi',
      'integer' => 'banyak pesanan harus Angka'
    ]);
    $this->form_validation->set_rules('total', 'total', 'required|integer', [
      'required' => 'total Wajib di isi',
      'integer' => 'total harus Angka'
    ]);
    $this->form_validation->set_rules('metode_bayar', 'metode bayar', 'required', [
      'required' => 'metode bayar Pelanggan Wajib di isi'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("pelanggan/vw_tambah_pelanggan", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_pelanggan' => $this->input->post('nama_pelanggan'),
        'alamat' => $this->input->post('alamat'),
        'pesanan' => $this->input->post('pesanan'),
        'banyak' => $this->input->post('banyak'),
        'total' => $this->input->post('total'),
        'metode_bayar' => $this->input->post('metode_bayar'),
      ];
      $this->Pelanggan_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
      role="alert">Data Pelanggan Berhasil Ditambah!</div>');
      redirect('Pelanggan');
    }
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman detail Mahasiswa";
    $data['mahasiswa'] = $this->Pelanggan_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($id)
  {
    $this->Pelanggan_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
    Pelanggan Berhasil Dihapus!</div>');
    redirect('Pelanggan');
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Pelanggan";
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['pelanggan'] = $this->Pelanggan_model->getById($id);
    $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required', [
      'required' => 'Nama Pelanggan Wajib di isi'
    ]);
    $this->form_validation->set_rules('alamat', 'alamat', 'required', [
      'required' => 'alamat Pelanggan Wajib di isi'
    ]);
    $this->form_validation->set_rules('pesanan', 'pesanan', 'required', [
      'required' => 'pesanan Pelanggan Wajib di isi'
    ]);
    $this->form_validation->set_rules('banyak', 'banyak', 'required|integer', [
      'required' => 'banyak Pesanan Wajib di isi',
      'integer' => 'banyak pesanan harus Angka'
    ]);
    $this->form_validation->set_rules('total', 'total', 'required|integer', [
      'required' => 'total Wajib di isi',
      'integer' => 'total harus Angka'
    ]);
    $this->form_validation->set_rules('metode_bayar', 'metode bayar', 'required', [
      'required' => 'metode bayar Pelanggan Wajib di isi'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("pelanggan/vw_ubah_pelanggan", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_pelanggan' => $this->input->post('nama_pelanggan'),
        'alamat' => $this->input->post('alamat'),
        'pesanan' => $this->input->post('pesanan'),
        'banyak' => $this->input->post('banyak'),
        'total' => $this->input->post('total'),
        'metode_bayar' => $this->input->post('metode_bayar'),
      ];
      $id = $this->input->post('id');
      $this->Pelanggan_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
  role="alert">Data Pelanggan Berhasil DiUbah!</div>');
      redirect('Pelanggan');
    }
  }

  function update()
  {
    $data = [
      'nama_pelanggan' => $this->input->post('nama_pelanggan'),
      'alamat' => $this->input->post('alamat'),
      'pesanan' => $this->input->post('pesanan'),
      'banyak' => $this->input->post('banyak'),
      'total' => $this->input->post('total'),
      'metode_bayar' => $this->input->post('metode_bayar'),
    ];
    $id = $this->input->post('id');
    $this->Pelanggan_model->update(['id' => $id], $data);
    redirect('Pelanggan');
  }
}
