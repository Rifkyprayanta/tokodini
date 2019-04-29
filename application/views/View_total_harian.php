    <table id="tabel" class="table table-stripped table-bordered " style="width:100%">
      <thead>
        <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Total Pemasukan</th>

      </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($laporan as $a) { 
          $total1 = $a->bayar;
          $tanggalTampil = $a->tanggal;
          ?>
        <tr>
          <td><?php echo $no;  ?></td>
          <td><?php echo date("d F Y", strtotime($tanggalTampil)); ?></td>
          <td>Rp. <?php echo number_format($total1, 2); ?></td>
          
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