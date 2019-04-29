<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
		$this->load->model('Model_barang');
		$this->load->model('Model_transaksi');
		$this->load->helper('form');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Login"));
		}
	}

	public function index()
	{
		$data['judul'] = "Data Transaksi";
		$data['transaksi'] = $this->Model_barang->data_barang();
		$data['tampil'] = $this->Model_transaksi->tampil_detail();
		$data['content'] = $this->load->view('View_transaksi', $data, TRUE); 
		$this->load->view('template/main', $data);
	}

}

