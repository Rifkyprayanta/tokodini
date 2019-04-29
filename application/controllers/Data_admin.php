<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_admin');
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

	public function index()
	{
		$data['judul'] = "Data Admin";
		$data['admin'] = $this->Model_admin->data_admin();
		$data['content'] = $this->load->view('View_admin', $data, TRUE); 
		$this->load->view('template/main', $data);
	}

	public function tambah_admin()
	{
		$data['judul'] = "Tambah Data Admin";
		$data['admin'] = $this->Model_admin->data_admin();
		$data['content'] = $this->load->view('Tambah_admin', $data, TRUE); 
		$this->load->view('template/main', $data);
	}

	public function aksi_tambah()
	{
		$data = array('username' => $this->input->post('username'),
			'password' => $this->input->post('password'));

		$insert = $this->Model_admin->tambah_admin($data);
		redirect(base_url().'index.php/Data_admin');
	}

	public function delete($id)
	{
		$this->Model_admin->delete_dataAdmin($id);
		redirect(base_url().'index.php/Data_admin');
	}
}

/* End of file Data_admin.php */
/* Location: ./application/controllers/Data_admin.php */