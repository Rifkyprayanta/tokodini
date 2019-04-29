<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_hutang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_hutang');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("index.php/Login"));
        }
    }

    public function index()
    {
        $data['judul'] = "Data Hutang Perorangan";
        $data['hutang'] = $this->Model_hutang->data_hutang_orang();
        $data['content'] = $this->load->view('View_hutang_perorangan', $data, TRUE); 
        $this->load->view('template/main', $data);
    }

    public function toko()
    {
        $data['judul'] = "Data Hutang Toko";
        $data['hutang'] = $this->Model_hutang->data_hutang_toko();
        $data['content'] = $this->load->view('View_hutang_toko', $data, TRUE); 
        $this->load->view('template/main', $data);
    }

    public function tambah_hutangOrang()
    {
        $data['judul'] = "Tambah Hutang Perorangan";
        $data['content'] = $this->load->view('Tambah_hutang_orang', $data, TRUE); 
        $this->load->view('template/main', $data);
    }

    public function tambah_hutangToko()
    {
        $data['judul'] = "Tambah Hutang Toko";
        $data['content'] = $this->load->view('Tambah_hutang_toko', $data, TRUE); 
        $this->load->view('template/main', $data);
    }

    public function aksiTambah_hutangOrang()
    {
        if(isset($_POST['submit']))
        {
            $this->Model_hutang->tambah_hutangOrang();
            redirect('Data_Hutang/');
        }
        else
        {
            //$data['transaksi'] =  $this->Model_transaksi->data_transaksi();
            //$data['detail']= $this->Model_transaksi->tampilkan_detail_transaksi()->result();
            //$this->load->view('template/main',$data);
            redirect('');
        }
    }

    public function aksiTambah_hutangToko()
    {
        if(isset($_POST['submit']))
        {
            $this->Model_hutang->tambah_hutangToko();
            redirect('Data_Hutang/Toko');
        }
        else
        {
            redirect('Data_Hutang/Toko');
        }
        // $data2 = array('nama' => $this->input->post('nama'),
        //     'jumlah' => $this->input->post('jumlah'),
        //     'jatuh_tempo' => $this->input->post('jatuh_tempo'),
        //     'keterangan' => $this->input->post('keterangan')
        //         );

        // $insert = $this->Model_hutang->tambah_barangToko($data2);
        // redirect(base_url().'index.php/Data_hutang/toko');
    }

    public function lunas_perorangan($id)
    {
        $this->Model_hutang->lunas_perorangan($id);
        redirect(base_url().'index.php/Data_hutang/');
    }

    public function lunas_toko($id)
    {
        $this->Model_hutang->lunas_toko($id);
        redirect(base_url().'index.php/Data_hutang/toko');
    }
    public function update($id)
    {
        $object = array('nama' => $this->input->post('nama'),
                        'jumlah' => $this->input->post('jumlah'),
                        'tanggal' => $this->input->post('tanggal'),
                        'keterangan' => $this->input->post('keterangan'));

        $update = $this->Model_hutang->update_perorangan($id, $object);
        redirect(base_url().'index.php/Data_hutang/');
    }

    public function update_toko($id)
    {
        $object = array('nama' => $this->input->post('nama'),
                        'jumlah' => $this->input->post('jumlah'),
                        'jatuh_tempo' => $this->input->post('jatuh_tempo'),
                        'keterangan' => $this->input->post('keterangan'));

        $update = $this->Model_hutang->update_toko($id, $object);
        redirect(base_url().'index.php/Data_hutang/toko');
    }

   

    public function edit_perorangan($id)
    {
        $data['judul'] = "Edit Data Hutang Perorangan";
        $data['hutang'] = $this->Model_hutang->data_hutang_orang_id($id);
        // $data['kategori'] = $this->Model_kategori->data_kategori();
        $data['content'] = $this->load->view('Edit_hutang_perorangan', $data, TRUE);
        $this->load->view('template/main', $data);
    }

    public function edit_toko($id)
    {
        $data['judul'] = "Edit Data Hutang Toko";
        $data['hutang'] = $this->Model_hutang->data_hutang_toko_id($id);
        // $data['kategori'] = $this->Model_kategori->data_kategori();
        $data['content'] = $this->load->view('Edit_hutang_toko', $data, TRUE);
        $this->load->view('template/main', $data);
    }
}