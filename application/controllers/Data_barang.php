<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_barang');
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
		$data['judul'] = "Data Barang";
		$data['barang'] = $this->Model_barang->data_barang();
		$data['content'] = $this->load->view('View_barang', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function makanan()
	{
		$data['judul'] = "Data Makanan";
		$data['barang'] = $this->Model_barang->data_makanan();
		$data['content'] = $this->load->view('View_makanan', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function minuman()
	{
		$data['judul'] = "Data Minuman";
		$data['barang'] = $this->Model_barang->data_minuman();
		$data['content'] = $this->load->view('View_minuman', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function kecapSaos()
	{
		$data['judul'] = "Data Kecap & Saos";
		$data['barang'] = $this->Model_barang->data_kecapSaos();
		$data['content'] = $this->load->view('View_kecapSaos', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function permen()
	{
		$data['judul'] = "Data Permen";
		$data['barang'] = $this->Model_barang->data_permen();
		$data['content'] = $this->load->view('View_permen', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function sembako()
	{
		$data['judul'] = "Data Sembako";
		$data['barang'] = $this->Model_barang->data_sembako();
		$data['content'] = $this->load->view('View_sembako', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function atk()
	{
		$data['judul'] = "Data ATK";
		$data['barang'] = $this->Model_barang->data_atk();
		$data['content'] = $this->load->view('View_atk', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function rokok()
	{
		$data['judul'] = "Data Rokok";
		$data['barang'] = $this->Model_barang->data_rokok();
		$data['content'] = $this->load->view('View_rokok', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function sabunSampo()
	{
		$data['judul'] = "Data Sabun & Sampo";
		$data['barang'] = $this->Model_barang->data_sabunSampo();
		$data['content'] = $this->load->view('View_sabunSampo', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function plastik()
	{
		$data['judul'] = "Data Plastik";
		$data['barang'] = $this->Model_barang->data_plastik();
		$data['content'] = $this->load->view('View_plastik', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function obatObatan()
	{
		$data['judul'] = "Data Obat - Obatan";
		$data['barang'] = $this->Model_barang->data_obatObatan();
		$data['content'] = $this->load->view('View_obatObatan', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	public function pembalut()
	{
		$data['judul'] = "Data Pembalut";
		$data['barang'] = $this->Model_barang->data_pembalut();
		$data['content'] = $this->load->view('View_pembalut', $data, TRUE); 
		$this->load->view('template/main', $data);
		//$this->load->view('Data_barang', $data);
	}

	

	public function tambah_barang()
	{
		$data['judul'] = "Tambah Barang";
		$data['barang'] = $this->Model_barang->data_barang();
		$data['kategori'] = $this->Model_kategori->data_kategori();
		$data['content'] = $this->load->view('Tambah_barang', $data, TRUE); 
		$this->load->view('template/main', $data);
	}

	public function aksi_tambah()
	{
		$data = array('kode_barang' => $this->input->post('kode_barang'),
			'id_kategori' => $this->input->post('id_kategori'),
			'nama_barang' => $this->input->post('nama_barang'),
			'satuan' => $this->input->post('satuan'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			'keterangan' => $this->input->post('keterangan')
				);

		$insert = $this->Model_barang->tambah_barang($data);
		redirect(base_url().'index.php/Data_barang');
	}

	public function edit_barang($id)
	{
		$data['judul'] = "Edit Data Barang";
		$data['barang'] = $this->Model_barang->get_id_barang($id);
		$data['kategori'] = $this->Model_kategori->data_kategori();
		$data['content'] = $this->load->view('Edit_barang', $data, TRUE);
		$this->load->view('template/main', $data);

	}

	public function update($id)
	{
		$object = array('id_kategori' => $this->input->post('id_kategori'),
						'nama_barang' => $this->input->post('nama_barang'),
						'satuan' => $this->input->post('satuan'),
						'jumlah' => $this->input->post('jumlah'),
						'harga' => $this->input->post('harga'),
						'keterangan' => $this->input->post('keterangan'));

		$update = $this->Model_barang->update_dataBarang($id, $object);
		redirect(base_url().'index.php/Data_barang');
	}

	public function delete($id)
	{
		$this->Model_barang->delete_dataBarang($id);
		redirect(base_url().'index.php/Data_barang');
	}

}

/* End of file Data_barang.php */
/* Location: ./application/controllers/Data_barang.php */