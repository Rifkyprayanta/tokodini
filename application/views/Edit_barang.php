 <?php foreach ($barang as $barang) { ?>
  <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Data_barang/update/'.$barang['kode_barang']) ?>">

    <div class="form-group">
      <label class="control-label col-sm-2" for="kategori">Nama Kategori:</label>
      <div class="col-sm-10">
      	
        <select class="form-control" name="id_kategori" placeholder="Masukkan Nama Kategori" >
        	<?php foreach($kategori as $kat) { 
            if ($kat->id_kategori == $barang['id_kategori']) {?>
              <option selected value="<?php echo $kat->id_kategori ?>"><?php echo $kat->kategori ?></option>
           <?php } else { ?>
              <option value="<?php echo $kat->id_kategori ?>"><?php echo $kat->kategori ?></option>
          <?php 
           }}
          ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama_barang">Nama Barang:</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $barang['nama_barang'] ?>" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="satuan">Satuan:</label>
      <div class="col-sm-10">          
       <select class="form-control" value="<?php echo $barang['satuan'] ?>" name="satuan" placeholder="Masukkan Satuan">
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
        <input type="text" class="form-control" name="jumlah" value="<?php echo $barang['jumlah'] ?>" placeholder="Masukkan Jumlah Barang" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="harga">Harga Barang:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="harga" value="<?php echo $barang['harga'] ?>"placeholder="Masukkan Harga Barang">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="keterangan">Keterangan Barang:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="keterangan" value="<?php echo $barang['keterangan'] ?>"placeholder="Masukkan Keterangan Barang">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" onclick="">Submit</button>
      </div>
    </div>
  </form>
  <?php } ?>