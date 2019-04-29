<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail Transaksi</h4>
        </div>
        <div class="modal-body">
           <div class="modal-data">
            <table id="tabel" class="table table-stripped table-bordered " style="width:100%">
              <thead>
                <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Beli</th>
                <th>Harga</th>
                <th>Total</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($tampil as $a) { ?>
                <tr>
                  <td><?php echo $no;  ?></td>
                  <td><?php echo $a->nama_barang; ?></td>
                  <td><?php echo $a->jumlah_beli; ?></td>
                  <td>Rp. <?php echo number_format($a->harga_satuan,2) ?></td>
                  <td>Rp. <?php echo number_format($a->jumlah_beli*$a->harga_satuan,2) ?></td>
                </tr>
                <?php $no++; } 
                ?>
              </tbody>
            </table>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>