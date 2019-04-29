    <a href="<?php echo base_url('index.php/Data_admin/tambah_admin') ;?>" class="btn btn-success"> Tambah Admin</a>
    <br>
    <br>
    <table id="tabel" class="table table-stripped table-bordered " style="width:100%">
      <thead>
        <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($admin as $a)
         {
           
         ?>
        <tr>
          <td><?php echo $no  ?></td>
          <td><?php echo $a->username; ?></td>
          <td><?php echo $a->password; ?></td>
          <td>
          <a href="<?php echo base_url().'index.php/Data_admin/delete/'.$a->id; ?>" onclick="return confirm('Ingin menghapus data?');" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php $no++;
        } 
        ?>
      </tbody>
    </table>