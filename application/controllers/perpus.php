<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perpus extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Perpus_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Mahasiswa";
    $data['perpustakaan'] = $this->Perpus_model->get();
    $this->load->view("layout/header");
    $this->load->view("perpustakaan/vw_perpus", $data);
    $this->load->view("layout/footer");
    // 
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Mahasiswa";
    // $data['prodi'] = $this->Prodi_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("perpustakaan/vw_tambah_perpus", $data);
    $this->load->view("layout/footer");
    // 
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman detail Mahasiswa";
    $data['perpustakaan'] = $this->Perpus_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("perpus/vw_detail_perpus", $data);
    $this->load->view("layout/footer");
    // 
  }
  public function hapus($id)
  {
    $this->Perpus_model->delete($id);
    redirect('perpus');
    // 
  }

  function upload()
  {
    $data = [
      'nama_buku' => $this->input->post('nama_buku'),
      'genre_buku' => $this->input->post('genre_buku'),
      'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
      'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
      'nomor_anggota' => $this->input->post('nomor_anggota'),
      'nama_peminjam' => $this->input->post('nama_peminjam')
    ];
    $this->Perpus_model->insert($data);
    redirect('perpus');
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman detail Mahasiswa";
    // $data['prodi'] = $this->Prodi_model->get();
    $data['perpustakaan'] = $this->Perpus_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("perpustakaan/vw_edit_perpus", $data);
    $this->load->view("layout/footer");
    // 
  }
  function update()
  {
    $data = [
        'nama_buku' => $this->input->post('nama_buku'),
      'genre_buku' => $this->input->post('genre_buku'),
      'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
      'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
      'nomor_anggota' => $this->input->post('nomor_anggota'),
      'nama_peminjam' => $this->input->post('nama_peminjam')
    ];
    $id = $this->input->post('id');
    $this->Perpus_model->update(['id' => $id], $data);
    redirect('perpus');
  }
}
