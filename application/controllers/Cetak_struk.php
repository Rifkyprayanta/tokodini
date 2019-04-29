<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_struk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
	}

	public function index()
	{
		$this->load->view('View_cetak');
	}

}

/* End of file Cetak_struk.php */
/* Location: ./application/controllers/Cetak_struk.php */