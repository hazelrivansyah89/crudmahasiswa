<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profil extends CI_Controller
{   
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model','userrole');
  }
  public function index()
  {
    $data['judul'] = "Halaman profile";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header_p",$data);
    $this->load->view("profile/vw_profile", $data);
    $this->load->view("layout/footer",$data);
  }
}