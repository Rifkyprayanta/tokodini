<?php foreach ($hutang as $a) { ?>
  <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Data_hutang/update/'.$a['id_hutang']) ?> ">

    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Perorangan :</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $a['nama'] ?>" class="form-control" name="nama" placeholder="Masukkan Nama Perorangan">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jumlah">Jumlah : </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jumlah" value="<?php echo $a['jumlah'] ?>" placeholder="Masukkan Jumlah" >
      </div>                        
    </div>                           
    <div class="form-group">
      <label class="control-label col-sm-2" for="tanggal">Tanggal : </label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" name="tanggal" value="<?php echo $a['tanggal'] ?>"placeholder="Masukkan Tanggal">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="keterangan">Keterangan : </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="keterangan" value="<?php echo $a['keterangan'] ?>"placeholder="Masukkan Keterangan">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="status">Status : </label>
      <div class="col-sm-10">        
      <?php if ($a['status'] == 0)
      {
        $status = 'Belum Lunas';
      }  ?>
        <input type="" class="form-control" value="<?php echo $status ?>" readonly>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" onclick="">Submit</button>
      </div>
    </div>
  </form>
  <?php } ?>