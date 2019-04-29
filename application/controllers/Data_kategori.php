<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Model_barang');
		$this->load->model('Model_kategori');

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
		$data['judul'] = "Data Kategori";
		$data['kategori'] = $this->Model_kategori->data_kategori();
		$data['content'] = $this->load->view('View_kategori', $data, TRUE); 
		$this->load->view('template/main', $data);
	}

	public function tambah_kategori()
	{
		$data['judul'] = "Tambah Kategori";
		$data['kategori'] = $this->Model_kategori->data_kategori();
		$data['content'] = $this->load->view('Tambah_kategori', $data, TRUE); 
		$this->load->view('template/main', $data);
	}

	public function aksi_tambah()
	{
		$data = array('id_kategori' => $this->input->post('id_kategori'),
			'kategori' => $this->input->post('kategori')
				);

		$insert = $this->Model_kategori->tambah_kategori($data);
		redirect(base_url().'index.php/Data_kategori');
	}

	public function edit_kategori($id)
	{
		$data['judul'] = "Edit Data Kategori";
		//$data['barang'] = $this->Model_barang->get_id_barang($id);
		$data['kategori'] = $this->Model_kategori->get_id_kategori($id);
		$data['content'] = $this->load->view('Edit_kategori', $data, TRUE);
		$this->load->view('template/main', $data);

	}

	public function update($id)
	{
		$object = array('id_kategori' => $this->input->post('id_kategori'),
						'kategori' => $this->input->post('kategori')
						);

		$update = $this->Model_kategori->update_dataKategori($id, $object);
		redirect(base_url().'index.php/Data_kategori');
	}

	public function delete($id)
	{
		$this->Model_kategori->delete_dataKategori($id);
		redirect(base_url().'index.php/Data_kategori');
	}

}

/* End of file Data_kategori.php */
/* Location: ./application/controllers/Data_kategori.php */