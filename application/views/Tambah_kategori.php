<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Data_kategori/aksi_tambah') ?>">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="kategori">Nama Kategori:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="kategori" placeholder="Masukkan Kategori Barang">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>