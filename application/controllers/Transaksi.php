<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('Cfpdf');
		$this->load->model('Model_barang');
		$this->load->model('Model_transaksi');
		$this->load->helper('form');
        $this->load->library('FPDF');
        date_default_timezone_set("ASIA/JAKARTA");

		if($this->session->userdata('status') != "login"){
            redirect(base_url("index.php/Login"));
        }

	}
	public function index()
	{
		$data['judul'] = "Data Transaksi";
		$data['transaksi'] = $this->Model_barang->data_barang();
		$data['tampil'] = $this->Model_transaksi->tampil_detail();
		$data['content'] = $this->load->view('View_transaksi', $data, TRUE); 
		$this->load->view('template/main', $data);
	}

	public function aksi_tambah()
	{
		if(isset($_POST['submit']))
        {
            $this->Model_transaksi->simpan_transaksi();
            redirect('Transaksi');
        }
        else
        {
            //$data['transaksi'] =  $this->Model_transaksi->data_transaksi();
            //$data['detail']= $this->Model_transaksi->tampilkan_detail_transaksi()->result();
            //$this->load->view('template/main',$data);
			redirect('Data_admin');
        }
	}

	public function hapus_barang($id)
	{
		$id = $this->uri->segment(3);
		$this->Model_transaksi->hapus_barang($id);
		redirect(base_url().'index.php/Transaksi');
	}

    public function selesai_transaksi()
    {
        $tanggal = date('Y-m-d');
        $user =  $this->session->userdata('nama');
        $bayar = $this->input->post('bayar');
        $kembalian = $this->input->post('kembalian');
        $admin=  $this->db->get_where('admin',array('username'=>$user))->row_array();
        $data =array('id'=>$admin['id'],
                    'tanggal'=>$tanggal,
                    'bayar' => $this->input->post('bayar'),
                    'kembalian' => $this->input->post('kembalian'));

        $insert = $this->Model_transaksi->selesai_transaksi($data);
        redirect('Transaksi');
    }

    public function laporan()
    {
        $data['judul'] = "Data Laporan";
        $data['laporan']=  $this->Model_transaksi->laporan_default();
        //$data['penjualan'] = $this->Model_transaksi->penjualan_hari();
        //$data['tampil'] = $this->Model_transaksi->tampil_detail_transaksi();
        $data['content'] = $this->load->view('View_laporan', $data, TRUE); 
        $this->load->view('template/main', $data);
    }

    public function total_harian()
    {
        $data['judul'] = "Data Total Pemasukan Harian";
        $data['laporan']=  $this->Model_transaksi->laporan_total_harian();
        //$data['penjualan'] = $this->Model_transaksi->penjualan_hari();
        //$data['tampil'] = $this->Model_transaksi->tampil_detail_transaksi();
        $data['content'] = $this->load->view('View_total_harian', $data, TRUE); 
        $this->load->view('template/main', $data);
    }

    public function total_bulanan()
    {
        $data['judul'] = "Data Total Pemasukan Bulanan";
        $data['laporan']=  $this->Model_transaksi->laporan_total_bulanan();
        //$data['penjualan'] = $this->Model_transaksi->penjualan_hari();
        //$data['tampil'] = $this->Model_transaksi->tampil_detail_transaksi();
        $data['content'] = $this->load->view('View_total_bulanan', $data, TRUE); 
        $this->load->view('template/main', $data);
    }

    public function detail_laporan($id)
    {
        $data['judul'] = "Data Detail Laporan";
        $data['tampil'] = $this->Model_transaksi->tampil_detailTransaksi($id);
        $data['content'] = $this->load->view('View_detail', $data, TRUE); 
        $this->load->view('template/main', $data);
    }
    
	public function cetak_struk()
	{

        $bayar    = $this->input->get('cash');
        $kembalian   = $this->input->get('kembalian');

		$pdf = new FPDF('P','mm',array(58,210));
        // membuat halaman baru
        $pdf->AddPage();

        // $pdf->setTopMargin(5);
        // $pdf->setLeftMargin(10);
        // $pdf->setRightMargin(0);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',10);
        // mencetak string  
        $pdf->Cell(40,4,'Toko Dini',0,1,'C');
        //$pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,4,'Jl. Pendidikan 3 No. 49',0,1,'C');
        $pdf->Cell(40,4,'Tambun Selatan, Bekasi',0,1,'C');
        $pdf->Cell(40,4,'Telp. 021-89525985',0,1,'C');
        $pdf->Cell(40,4,'HP. 081218058527',0,1,'C');
        $dataAtas = $this->session->userdata('nama');
        $pdf->Cell(40,4,'Operator : '.$dataAtas,0,1,'C');
        $pdf->Cell(40,4,date("d F Y, h:i:s"),0,1,'C');
        $pdf->Cell(40,4,'______________________',0,1,'C');
        //$pdf->Ln(100);
        
        // Memberikan space kebawah agar tidak terlalu rapat
        // $pdf->Cell(10,7,'',0,1);
        // $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,2,'',0,1,'C');
        $pdf->SetFont('Arial','',10);
        $data = $this->Model_transaksi->tampil_detail_cetak();
        $total = 0;
        foreach ($data as $row) { ?>
            <?php $pdf->Cell(4,4,$row->nama_barang ,0,1); ?>
            <?php $pdf->Cell(4,4,$row->jumlah_beli,0,0); ?>
            <?php $pdf->Cell(4,4,' x ',0,0); ?>
            <?php $pdf->Cell(15,4,number_format($row->harga_satuan,0),0,0);?>
            <?php $pdf->Cell(4,4,number_format($row->harga_satuan*$row->jumlah_beli,0),0,1);

        $total = $total + ($row->harga_satuan*$row->jumlah_beli); 

        }
        $pdf->Cell(40,5,'______________________',0,1,'C');
        $pdf->Cell(18,5,'Total',0,0);
        $pdf->Cell(6,5,'Rp. ',0,0);
        $pdf->Cell(4,5,number_format($total,0),0,1);
        $pdf->Cell(18,5,'Bayar',0,0);
        $pdf->Cell(6,5,'Rp. ',0,0);
        $pdf->Cell(4,5,number_format($bayar,0),0,1);
        if($kembalian == 0)
        {
            $kembalian1 = 0;
        }
        else 
        {
            $kembalian1 = ($bayar - $total);
        }
        $pdf->Cell(18,5,'Kembalian',0,0);
        $pdf->Cell(6,5,'Rp. ',0,0);
        $pdf->Cell(4,5,number_format($kembalian1,0),0,1);
        $pdf->Cell(35,5,'',0,1,'C');
        
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(40,3,'Perhatian',0,1,'C'); 
        $pdf->Cell(40,3,'Barang yang sudah dibeli',0,1,'C'); 
        $pdf->Cell(40,3,'Tidak dapat ditukar/dikembalikan',0,1,'C');
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(40,3,'Terimakasih',0,1,'C');      
        $pdf->Output();

        
	}


}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */