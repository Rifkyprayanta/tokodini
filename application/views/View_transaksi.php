<?php echo form_open('Transaksi/aksi_tambah', array('class'=>'form-horizontal')); ?>
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama Barang</label>
      <div class="col-sm-10">
         <input list="barang" name="barang" placeholder="masukan nama barang" class="form-control" required>
      </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Quantity</label>
      <div class="col-sm-10">
        <input type="text" name="qty" placeholder="QTY" class="form-control" required>
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary btn-sm">Tambah</button>  
    </div>
  </div>
</form>
  <datalist id="barang">
    <?php
    foreach ($transaksi as $t) {
   echo "<option value='$t->nama_barang'>"."($t->harga/$t->satuan)";
   }
    ?>                             
  </datalist>

<br>
  <table class="table table-stripped table-bordered" style="width:100%">
      <thead>
        <tr class="info">
        	<th colspan="6"> Detail Transaksi </th>
        </tr>
        
         <tr>
         	<th>No</th>
         	<th>Nama Barang</th>
         	<th>Jumlah</th>
         	<th>Harga</th>
         	<th>Sub total</th>
          <th>Aksi</th>
           </thead>
        </tr>
        <tbody>
        <?php $no=1; $total=0; foreach($tampil as $t) { ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $t->nama_barang ?></td>
          <td><?php echo $t->jumlah_beli ?></td>
          <td>Rp. <?php echo number_format($t->harga_satuan,2) ?></td>
          <td>Rp. <?php echo number_format($t->jumlah_beli*$t->harga_satuan,2) ?></td>
          <td><a type="button" class="btn btn-danger" href="<?php echo base_url().'index.php/Transaksi/hapus_barang/'.$t->id_detail_transaksi; ?>">Hapus Barang</a></td>
        </tr>
        <?php $total=$total+($t->jumlah_beli*$t->harga_satuan); $no++; } ?>
        <tr>
          <td colspan="4"><b>TOTAL</b></td>
          <td colspan="2">
          <h4><b>Rp. <?php echo number_format($total,2);?></b></h4>
          

          <input id="TotalBayar" class="form-control"
          value="<?php echo ($total);?>" type="hidden">
          </td>
            <!-- <input type="hidden" id='TotalBayarHidden'> -->
          </tr>
        <tr>
          <form name="myForm" method="POST" action="<?php echo base_url('index.php/Transaksi/selesai_transaksi/') ?>">
        <td colspan="4"><b>BAYAR</b></td>
        <td colspan="2"><input id="UangCash" type="text" name="bayar" placeholder="Bayar" class="form-control" onkeypress="return check_int(event)" onkeyup="return HitungTotalKembalian(event);" required></td>
        </tr>
        <tr>
        <b><td colspan="4"><b>KEMBALIAN</b></td>
        <td colspan="2"><input id="kembalian" type="text" name="kembalian" placeholder="Kembalian" class="form-control" readonly></td>
        </tr>
        	<th> 
            <button type="submit" class="btn btn-primary">Selesai</button>
            <a type="button" class="btn btn-success" onclick="CetakSudahSelesai()">Cetak Struk</a>
        	</th>
        </form>
        <th>
         
          </th>
        </tr>
      </tbody>
  </table>
  
<script>

function CetakSudahSelesai() {

    var x = document.forms["myForm"]["bayar"].value;

    if (x == "") {
        alert("PERHATIAN Masukkan Uang Pembayaran");
        return false;
    }


    FormData += "&cash="+$('#UangCash').val();
    FormData += "&kembalian="+$('#kembalian').val();

     window.open("<?php echo site_url('Transaksi/cetak_struk/?'); ?>" + FormData,'_blank');
}

  
$(document).ready(function(){
  console.log("SPAGHETTI");
})

  function check_int(evt) {
  var charCode = ( evt.which ) ? evt.which : event.keyCode;
  console.log(evt);
  return ( charCode >= 48 && charCode <= 57 || charCode == 8 );
  }

  $(document).on('keyup', '#UangCash', function(){
    console.log("MOMS");
  HitungTotalKembalian();
  });

function HitungTotalKembalian()
{
  var Cash = $('#UangCash').val();
  var TotalBayar = $('#TotalBayar').val();
  var TotalTotal = to_angka(TotalBayar);
  // console.log(event.target.value);
  console.log("MOMS SPAGHETTI");
  console.log(Cash);
  // console.log(TotalBayar);
  console.log(TotalTotal);

  if(parseInt(Cash) >= parseInt(TotalTotal)){
      var Selisih = parseInt(Cash) - parseInt(TotalTotal);
      //$('#UangKembali').val(to_rupiah(Selisih));
       $("#kembalian").val(to_rupiah(Selisih));
   } 
   else if (parseInt(Cash) == 0){
    var Selisih = 0;
    //$('#UangKembali').val(to_rupiah(Selisih));
       $("#kembalian").val(0);
  }  
   else if(parseInt(Cash) <= parseInt(TotalTotal)){
      var Selisih = parseInt(Cash) - parseInt(TotalTotal);
      //$('#UangKembali').val(to_rupiah(Selisih));
       $("#kembalian").val(to_rupiah(Selisih));
   } 
   
   
   else {
  //$('#UangKembali').val('');
    $("#kembalian").val('');
  }
}

function to_rupiah(angka){
    var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
    var rev2    = '';
    for(var i = 0; i < rev.length; i++){
        rev2  += rev[i];
        if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
            rev2 += '.';
        }
    }
    return angka;
}

function to_angka(angka){
    var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
    var rev2    = '';
    for(var i = 0; i < rev.length; i++){
        rev2  += rev[i];
        if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
            rev2 += '.';
        }
    }
    return angka;
  }

  function CetakStruk()
  {

  if($('#TotalBayarHidden').val() > 0)
  {
    if($('#UangCash').val() !== '')
    {
      FormData += "&cash="+$('#UangCash').val();
      FormData += "&kembalian="+$('#kembalian').val();

      window.open("<?php echo site_url('index.php/Transaksi/cetak_struk/?'); ?>" + FormData,'_blank');
    }
    else
    {
      $('.modal-dialog').removeClass('modal-lg');
      $('.modal-dialog').addClass('modal-sm');
      $('#ModalHeader').html('Oops !');
      $('#ModalContent').html('Harap masukan Total Bayar');
      $('#ModalFooter').html("<button type='button' class='btn btn-primary' data-dismiss='modal' autofocus>Ok</button>");
      $('#ModalGue').modal('show');
    }
  }
  else
  {
    $('.modal-dialog').removeClass('modal-lg');
    $('.modal-dialog').addClass('modal-sm');
    $('#ModalHeader').html('Oops !');
    $('#ModalContent').html('Harap pilih barang terlebih dahulu');
    $('#ModalFooter').html("<button type='button' class='btn btn-primary' data-dismiss='modal' autofocus>Ok</button>");
    $('#ModalGue').modal('show');

  }
}
</script>