    <a href="<?php echo base_url('index.php/Data_barang/tambah_barang') ;?>" class="btn btn-success"> Tambah Barang</a>
    <br>
    <br>
    <table id="tabel" class="table table-stripped table-bordered " style="width:100%">
      <thead>
        <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Kategori</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($barang as $barang)
         {
           
         ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $barang->kode_barang; ?></td>
          <td><?php echo $barang->kategori; ?></td>
          <td><?php echo $barang->nama_barang; ?></td>
          <td><?php echo $barang->satuan; ?></td>
          <td><?php echo $barang->jumlah; ?></td>
          <td>Rp. <?php echo number_format($barang->harga,2); ?></td>
          <td><?php echo $barang->keterangan; ?></td>
          <td><a href="<?php echo base_url().'index.php/Data_barang/edit_barang/'.$barang->kode_barang; ?>" class="btn btn-success" >Edit</a>
          <a href="<?php echo base_url().'index.php/Data_barang/delete/'.$barang->kode_barang; ?>" onclick="return confirm('Ingin menghapus data?');" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php 
        $no++; } 
        ?>
      </tbody>
    </table>