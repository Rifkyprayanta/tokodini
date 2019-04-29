<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	private $table = "kategori";

	public function data_kategori()
	{
		$this->db->select("kategori.id_kategori, kategori.kategori");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function tambah_kategori($data)
	{
		$tambah = $this->db->insert($this->table, $data);
		return $tambah;
	}

	public function get_id_kategori($id)
	{
		//$this->db->select("barang.id_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, kategori.id_kategori, kategori.kategori");
		//$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where('kategori.id_kategori', $id);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function update_dataKategori($id, $object)
	{
		$this->db->where('id_kategori', $id);
		$update = $this->db->update($this->table,$object);
		return $update;
	}

	public function delete_dataKategori($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete($this->table);
	}
}

/* End of file Model_kategori.php */
/* Location: ./application/models/Model_kategori.php */