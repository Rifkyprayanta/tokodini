<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Model_login');
		
	}

	public function index() 
	{
		$this->load->view('Login');
	}

	public function cekLogin()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username' => $username, 'password' => $password);

		$cek = $this->Model_login->cek_login("admin", $where)->num_rows();
		if($cek > 0)
		{
			$data_session = array('nama' => $username, 'status' => "login");
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/Admin"));

		}
		else
		{
			echo $this->session->set_flashdata('message', '<div class="alert alert-danger">
                    <p>Anda Salah Username / Password</p>
                </div>');
			redirect(base_url("index.php/Login"));

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/Login'));
	}
}