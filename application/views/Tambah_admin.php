<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Data_admin/aksi_tambah') ?>">

    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="password" placeholder="Masukkan password">
      </div>
    </div>

     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>

  </form>