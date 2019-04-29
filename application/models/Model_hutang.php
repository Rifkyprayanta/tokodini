<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_hutang extends CI_Model {

	private $table = "hutang_orang";
	private $table2 = "hutang_toko";

	public function data_hutang_orang()
	{
		$this->db->select("id_hutang, nama, jumlah, tanggal, keterangan, status");
		$this->db->order_by("id_hutang", "desc");
		$query = $this->db->get($this->table);
		return $query->result();
	}
	public function data_hutang_orang_id($id)
	{
		$this->db->select("id_hutang, nama, jumlah, tanggal, keterangan, status");
		$this->db->where("id_hutang = $id");
		//$this->db->order_by("id_hutang", "desc");
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function data_hutang_toko_id($id)
	{
		$this->db->select("id_hutang_toko, nama, jumlah, jatuh_tempo, keterangan, status");
		$this->db->where("id_hutang_toko = $id");
		//$this->db->order_by("id_hutang", "desc");
		$query = $this->db->get($this->table2);
		return $query->result_array();
	}

	public function data_hutang_toko()
	{
		$this->db->select("id_hutang_toko, nama, jumlah, jatuh_tempo, keterangan,status");
		$this->db->order_by("id_hutang_toko", "desc");
		$query = $this->db->get($this->table2);
		return $query->result();
	}

	public function tambah_hutangOrang($data)
	{
		$nama    		=  $this->input->post('nama');
        $jumlah         =  $this->input->post('jumlah');
        $tanggal        =  $this->input->post('tanggal');
        $keterangan     =  $this->input->post('keterangan');

        $data2           =  array('nama'=>$nama,
                                'jumlah'=>$jumlah,
                                'tanggal'=>$tanggal,
                                'keterangan'=>$keterangan,
                                'status' => '0');

		 $this->db->insert($this->table,$data2);
	}

	public function tambah_hutangToko($data)
	{
		$nama    		=  $this->input->post('nama');
        $jumlah         =  $this->input->post('jumlah');
        $jatuh_tempo        =  $this->input->post('jatuh_tempo');
        $keterangan     =  $this->input->post('keterangan');

        $data2           =  array('nama'=>$nama,
                                'jumlah'=>$jumlah,
                                'jatuh_tempo'=>$jatuh_tempo,
                                'keterangan'=>$keterangan,
                                'status' => '0');

		 $this->db->insert($this->table2,$data2);
	}

	public function lunas_perorangan($id)
	{
		$update = $this->db->query("update hutang_orang set status='1' where status='0' AND id_hutang=$id");

		return $update;
		
	}

	public function lunas_toko($id)
	{
		$update = $this->db->query("update hutang_toko set status='1' where status='0' AND id_hutang_toko=$id");

		return $update;
		
	}

	public function update_perorangan($id, $object)
    {
        $this->db->where('id_hutang', $id);
        $update = $this->db->update($this->table,$object);
        return $update;
    }

    public function update_toko($id, $object)
    {
        $this->db->where('id_hutang_toko', $id);
        $update = $this->db->update($this->table2,$object);
        return $update;
    }

}
