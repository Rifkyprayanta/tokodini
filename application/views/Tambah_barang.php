<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Data_barang/aksi_tambah') ?>">

    <div class="form-group">
      <label class="control-label col-sm-2" for="kode_barang">Kode Barang:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="kode_barang" placeholder="Masukkan Kode Barang">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kategori">Nama Kategori:</label>
      <div class="col-sm-10">
      	
        <select class="form-control" name="id_kategori" placeholder="Masukkan Nama Kategori" >
        	<?php foreach ($kategori as $kategori) {
        		# code...
        	 ?>
        	<option value="<?php echo $kategori->id_kategori; ?>"><?php echo $kategori->kategori; ?></option>
        	<?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama_barang">Nama Barang:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="satuan">Satuan:</label>
      <div class="col-sm-10">          
       <select class="form-control" name="satuan" placeholder="Masukkan Satuan">
        	<option>Pcs</option>
        	<option>Pak</option>
        	<option>Box</option>
		    <option>Kilogram</option>
		    <option>Liter</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jumlah">Jumlah Barang:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="jumlah" placeholder="Masukkan Jumlah Barang" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="harga">Harga Barang:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga Barang">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="harga">Keterangan:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan Barang">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>