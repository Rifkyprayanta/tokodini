<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_barang');
		//$this->load->model('Model_kategori');

		if($this->session->userdata('status') != "login"){
            redirect(base_url("index.php/Login"));
        }
        
		//$this->load->helper('url', 'form');
		//$this->load->library('form_validation');

		// if (empty($this->session->userdata('user_id'))) {
		// 	redirect(base_url().'index.php/login');
		// }
	}



}

/* End of file Tambah_barang.php */
/* Location: ./application/controllers/Tambah_barang.php */