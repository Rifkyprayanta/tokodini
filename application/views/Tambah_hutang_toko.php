<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Data_hutang/aksiTambah_hutangToko') ?>">

    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Agen : </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Agen" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jatuh_tempo">Jatuh Tempo : </label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" name="jatuh_tempo" placeholder="Masukkan Tanggal" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="jumlah">Jumlah Hutang : </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jumlah" placeholder="Masukkan Jumlah" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="harga">Keterangan : </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>