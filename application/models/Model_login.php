<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model
{

	//$table = "admin";
	
	public function cekData($username,$password)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->query('SELECT * FROM admin');
		$num = $query->num_rows();
		print_r($num);
		if($num > 0)
		{
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username, 
								'password' => $row->password);
			}
		$this->session->get_userdata($sess);
		redirect('Admin');
		}	
		else
		{
			$this->session->set_flashdata('info', 'Maaf Username dan Password tidak tersedia');
			redirect('Login');
			print_r($num);
		}
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}