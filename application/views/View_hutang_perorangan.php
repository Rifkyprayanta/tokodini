    <a href="<?php echo base_url('index.php/Data_hutang/Tambah_hutangOrang') ;?>" class="btn btn-success"> Tambah Hutang Perorangan</a>
    <br>
    <br>
    <table id="tabel" class="table table-stripped table-bordered " style="width:100%">
      <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Tanggal Hutang</th>
        <th>Keterangan</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($hutang as $a)
         {
            if ($a->status == 0)
            {
               $hutang = 'Belum Dibayar';
            }
            else
            {
              $hutang = 'Sudah Dibayar';
            }
         ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $a->nama; ?></td>
          <td>Rp. <?php echo number_format($a->jumlah,0); ?></td>
          <td><?php echo date("d F Y", strtotime($a->tanggal)); ?></td>
          <td><?php echo $a->keterangan; ?></td>
          <td><b><?php echo $hutang; ?></b></td>

          <?php 
          if($a->status == 0)
          { ?>
          <td><a href="<?php echo base_url().'index.php/Data_hutang/edit_perorangan/'.$a->id_hutang; ?>" class="btn btn-primary" >Edit</a>
            <a href="<?php echo base_url().'index.php/Data_hutang/lunas_perorangan/'.$a->id_hutang; ?>" onclick="return confirm('Bayar Secara Lunas?');" class="btn btn-success" >Lunas</a>
          <?php }
          else 
          {?>
          <td></td>
          <?php }
          

          ?>
        </tr>
        <?php 
        $no++; } 
        ?>
      </tbody>
    </table>