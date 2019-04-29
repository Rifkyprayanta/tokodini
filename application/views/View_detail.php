 <table id="tabel" class="table table-stripped table-bordered " style="width:100%">

              <thead>
                <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Beli</th>
                <th>Harga</th>
                <th>Sub Total</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=1; $total=0; foreach ($tampil as $a) { ?>
                <tr>
                  <td><?php echo $no;  ?></td>
                  <td><?php echo $a->nama_barang; ?></td>
                  <td><?php echo $a->jumlah_beli; ?></td>
                  <td>Rp. <?php echo number_format($a->harga_satuan,2) ?></td>
                  <td>Rp. <?php echo number_format($a->jumlah_beli*$a->harga_satuan,2) ?></td>
                </tr>
                <?php $total=$total+($a->jumlah_beli*$a->harga_satuan); $no++; } 
                ?>
                <tr>
                  <td colspan="4"><b>TOTAL</b></td>
                  <td><b>Rp. <?php echo number_format($total,2);?></b></td>
                </tr>
                <tr>
                  <td>No. Transaksi <b><?php echo $a->id_transaksi;?></b></td>
                </tr>
              </tbody>
            </table> 
