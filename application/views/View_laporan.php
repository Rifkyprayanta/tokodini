    <table id="tabel" class="table table-stripped table-bordered " style="width:100%">
      <thead>
        <tr>
        <th>No</th>
        <th>Nomor Transaksi</th>
        <th>Tanggal</th>
        <th>Operator</th>
        <th>Total</th>
        <th>Bayar</th>
        <th>Kembalian</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($laporan as $a) { 
          $total1 = $a->bayar;
          $total2 = $a->kembalian;
          $total3 = $a->jumlah_beli * $a->harga_satuan;
          $tanggalTampil = $a->tanggal;
          ?>
        <tr>
          <td><?php echo $no;  ?></td>
          <td><?php echo $a->id_transaksi ?></td>
          <td><?php echo date("d F Y", strtotime($tanggalTampil)); ?></td>
          <td><?php echo $a->username ?></td>
          <td>Rp. <?php echo number_format($total3,2); ?></td>
          <td>Rp. <?php echo number_format($total1,2) ?></td>
          <td>Rp. <?php echo number_format($a->kembalian,2); ?></td>
          <td><a href="<?php echo base_url().'index.php/Transaksi/detail_laporan/'.$a->id_transaksi; ?>" target="_blank" class="btn btn-success">Detail</a></td> 
        </tr>

        <?php $no++; } 
        ?>



      </tbody>
    </table>

    
<script>
  $(document).ready(function() {
    $('.view_data').click(function(){
      var id_transaksi = $(this).attr("id_transaksi");

      $.ajax({
        url:"";
        method:"post";
        data:{}

      });
      $('#myModal').modal("show");
    })
  })

</script>