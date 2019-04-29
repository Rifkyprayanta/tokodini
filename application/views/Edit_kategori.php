 <?php foreach ($kategori as $kategori) { ?>
  <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Data_kategori/update/'.$kategori['id_kategori']) ?>">

    <div class="form-group">
      <label class="control-label col-sm-2" for="id_kategori">Kode Kategori:</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $kategori['id_kategori'] ?>" class="form-control" name="id_kategori" placeholder="Masukkan Kode Kategori">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kategori">Kategori:</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $kategori['kategori'] ?>" class="form-control" name="kategori" placeholder="Masukkan Kategori">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" onclick="">Submit</button>
      </div>
    </div>
  </form>
  <?php } ?>