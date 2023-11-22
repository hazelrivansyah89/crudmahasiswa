<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Coba
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Coba extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
   // Mengambil data dari POST
   $nama = $this->input->post('nama');
   $email = $this->input->post('email');

   // Menampilkan data
   $data['nama'] = $nama;
   $data['email'] = $email;

   $this->load->view('layout/coba', $data);
  }

}


/* End of file Coba.php */
/* Location: ./application/controllers/Coba.php */