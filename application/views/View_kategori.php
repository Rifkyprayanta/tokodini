    <a href="<?php echo base_url('index.php/Data_kategori/tambah_kategori') ;?>" class="btn btn-success"> Tambah Kategori</a>
    <br>
    <br>
    <table id="tabel" class="table table-stripped table-bordered " style="width:100%">
      <thead>
        <tr>
        <th>Nomor</th>
        <th>Kategori</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($kategori as $kategori)
         {
          
         ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $kategori->kategori; ?></td>
          <td><a href="<?php echo base_url().'index.php/Data_kategori/edit_kategori/'.$kategori->id_kategori; ?>" class="btn btn-success" >Edit</a>
          <a href="<?php echo base_url().'index.php/Data_kategori/delete/'.$kategori->id_kategori; ?>" onclick="return confirm('Ingin menghapus data?');" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php 
        $no++;} 
        ?>
      </tbody>
    </table>