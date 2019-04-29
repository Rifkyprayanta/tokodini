<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail Transaksi</h4>
        </div>
        <div class="modal-body">
           <div class="modal-data">
           		<?php 
              if(!empty($content)){
              echo $content;
              }
            ?>
           	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>