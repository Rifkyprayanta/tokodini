<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	private $table = "admin";

	public function data_admin()
	{
		$this->db->select("admin.id, admin.username, admin.password");
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function tambah_admin($data)
	{
		$tambah = $this->db->insert($this->table, $data);
		return $tambah;
	}

	public function delete_dataAdmin($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	

}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */