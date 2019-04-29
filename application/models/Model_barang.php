<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	private $table = "barang";

	public function data_barang()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->order_by("kode_barang", "asc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_makanan()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='Makanan'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_minuman()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='Minuman'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_kecapSaos()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='Kecap & Saos'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_permen()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='Permen'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_sembako()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='Sembako'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_atk()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='ATK'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_rokok()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='Rokok'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_sabunSampo()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='sabun & sampo'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_plastik()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='plastik'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_obatObatan()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='Obat-obatan'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function data_pembalut()
	{
		$this->db->select("barang.kode_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, barang.keterangan, kategori.kategori");
		$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where("kategori='Pembalut'");
		$this->db->order_by("kode_barang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}



	public function tambah_barang($data)
	{
		$tambah = $this->db->insert($this->table, $data);
		return $tambah;
	}

	public function get_id_barang($id)
	{
		//$this->db->select("barang.id_barang, barang.nama_barang, barang.satuan, barang.jumlah, barang.harga, kategori.id_kategori, kategori.kategori");
		//$this->db->join("kategori", "kategori.id_kategori=barang.id_kategori");
		$this->db->where('barang.kode_barang', $id);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function update_dataBarang($id, $object)
	{
		$this->db->where('kode_barang', $id);
		$update = $this->db->update($this->table,$object);
		return $update;
	}

	public function delete_dataBarang($id)
	{
		$this->db->where('kode_barang', $id);
		$this->db->delete($this->table);
	}
}

/* End of file Model_barang.php */
/* Location: ./application/models/Model_barang.php */