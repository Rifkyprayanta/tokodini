<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model {

    private $table = "detail_transaksi";
    private $table2 = "barang";
    private $table3 = "transaksi";
    private $table4 = "admin";

    public function data_transaksi()
    {
        $this->db->select("detail_transaksi.id_detail_transaksi, barang.nama_barang, detail_transaksi.jumlah_beli,detail_transaksi.harga_satuan, detail_transaksi.status");
        $this->db->join("barang", "detail_transaksi.kode_barang=barang.kode_barang");
        $query = $this->db->get($this->table);
        return $query->result();
    }

	public function simpan_transaksi()
	{
		$nama_barang    =  $this->input->post('barang');
        $jumlah         =  $this->input->post('qty');

        $query          =  $this->db->get_where($this->table2, array('nama_barang'=>$nama_barang))->row_array();
        $data           =  array('kode_barang'=>$query['kode_barang'],
                                'jumlah_beli'=>$jumlah,
                                'harga_satuan'=>$query['harga'],
                                'status' => '0');
         $this->db->insert($this->table,$data);	
    }

    public function tampil_operator()
    {
        $this->db->select("admin.username");
        $this->db->where("admin.username");
        $query = $this->db->get($this->table4);
        return $query->result();
    }
    
    public function tampil_detail()
    {
        $this->db->select("detail_transaksi.id_detail_transaksi, barang.nama_barang, detail_transaksi.kode_barang, detail_transaksi.jumlah_beli, detail_transaksi.harga_satuan, detail_transaksi.status");
        $this->db->join("barang", "detail_transaksi.kode_barang=barang.kode_barang");
        $this->db->where("detail_transaksi.status=1");
        $query = $this->db->get($this->table);
        return $query->result();
    }

     public function tampil_detail_cetak()
    {
        $this->db->select("detail_transaksi.id_detail_transaksi, barang.nama_barang, detail_transaksi.kode_barang, detail_transaksi.jumlah_beli, detail_transaksi.harga_satuan, detail_transaksi.status");
        $this->db->join("barang", "detail_transaksi.kode_barang=barang.kode_barang");
        $this->db->where("detail_transaksi.status=1");
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function tampil_detailTransaksi($id)
    {
        $this->db->select("detail_transaksi.id_detail_transaksi, barang.nama_barang, detail_transaksi.kode_barang, detail_transaksi.jumlah_beli, detail_transaksi.harga_satuan, detail_transaksi.status, transaksi.id_transaksi");
        $this->db->join("barang", "detail_transaksi.kode_barang=barang.kode_barang");
        $this->db->join("transaksi", "detail_transaksi.id_transaksi=transaksi.id_transaksi");
        $this->db->where("detail_transaksi.id_transaksi",$id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function hapus_barang($id)
    {
        $this->db->where('id_detail_transaksi', $id);
        $this->db->delete($this->table);
    }


    public function selesai_transaksi($data)
    {
        $tambah = $this->db->insert($this->table3,$data);
        $last_id=  $this->db->query("select id_transaksi from transaksi order by id_transaksi desc")->row_array();
        $this->db->query("update detail_transaksi set id_transaksi='".$last_id['id_transaksi']."' where status='0'");
        $this->db->query("update detail_transaksi set status='1' where status='0'");
        return $tambah;
    }

    public function laporan_default()
    {
        $this->db->select("transaksi.id_transaksi, detail_transaksi.jumlah_beli, detail_transaksi.harga_satuan, transaksi.tanggal, transaksi.id, transaksi.bayar, transaksi.kembalian, admin.username");
        $this->db->join("admin", "transaksi.id = admin.id");
        $this->db->join("detail_transaksi", "transaksi.id_transaksi = detail_transaksi.id_transaksi");
        $this->db->order_by("id_transaksi", "desc");
        $query = $this->db->get($this->table3);   
        return $query->result();
    }

    public function laporan_total_harian()
    {
        $this->db->select("id_transaksi, tanggal,SUM(transaksi.bayar) as bayar,admin.username");
        //$this->db->from("transaksi");
        $this->db->join("admin", "transaksi.id = admin.id");
        $this->db->order_by("id_transaksi", "desc");
        $this->db->group_by("tanggal");
        $query = $this->db->get($this->table3);   
        return $query->result();
    }

    public function laporan_total_bulanan()
    {
        $this->db->select("id_transaksi, tanggal as bulan, SUM(bayar) as totalpemasukan, admin.username");
        //$this->db->from("transaksi");
        $this->db->join("admin", "transaksi.id = admin.id");
        //$this->db->order_by("id_transaksi", "desc");
        $this->db->group_by("MONTH(tanggal), YEAR(tanggal)");
        $query = $this->db->get($this->table3);   
        return $query->result();
    }

}

/* End of file Model_transaksi.php */
/* Location: ./application/models/Model_transaksi.php */