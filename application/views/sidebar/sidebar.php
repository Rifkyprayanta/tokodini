
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/image/admin162.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hai, <?php echo $this->session->userdata("nama"); ?>
         </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('index.php/Admin') ;?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('index.php/Data_barang') ;?>">
            <i class="fa fa-table"></i>
            <span>Data Barang </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/Data_barang') ;?>"><i class="fa fa-circle-o"></i> Data Barang</a></li>
            <li><a href="<?php echo base_url('index.php/Data_barang/makanan') ;?>"><i class="fa fa-circle-o"></i> Data Makanan</a></li>
            <li><a href="<?php echo base_url('index.php/Data_barang/minuman') ;?>"><i class="fa fa-circle-o"></i> Data Minuman</a></li>
             <li><a href="<?php echo base_url('index.php/Data_barang/kecapSaos') ;?>"><i class="fa fa-circle-o"></i> Data Kecap & Saos</a></li>
             <li><a href="<?php echo base_url('index.php/Data_barang/permen') ;?>"><i class="fa fa-circle-o"></i> Data Permen</a></li>
             <li><a href="<?php echo base_url('index.php/Data_barang/sembako') ;?>"><i class="fa fa-circle-o"></i> Data Sembako</a></li>
             <li><a href="<?php echo base_url('index.php/Data_barang/atk') ;?>"><i class="fa fa-circle-o"></i> Data ATK</a></li>
            <li><a href="<?php echo base_url('index.php/Data_barang/rokok') ;?>"><i class="fa fa-circle-o"></i> Data Rokok</a></li>
            <li><a href="<?php echo base_url('index.php/Data_barang/sabunSampo') ;?>"><i class="fa fa-circle-o"></i> Data Sabun & Sampo</a></li>
            <li><a href="<?php echo base_url('index.php/Data_barang/plastik') ;?>"><i class="fa fa-circle-o"></i> Data Plastik</a></li>
            <li><a href="<?php echo base_url('index.php/Data_barang/obatObatan') ;?>"><i class="fa fa-circle-o"></i> Data Obat-obatan</a></li>
            <li><a href="<?php echo base_url('index.php/Data_barang/pembalut') ;?>"><i class="fa fa-circle-o"></i> Data Pembalut</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('index.php/Data_kategori') ;?>">
            <i class="fa fa-bars"></i> <span>Data Kategori</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('index.php/Transaksi'); ?>">
            <i class="fa fa-cart-plus"></i> <span>Data Transaksi</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('index.php/Data_barang') ;?>">
            <i class="fa fa-calendar"></i>
            <span>Data History Transaksi</span>
          </a>

        <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/Transaksi/laporan') ;?>"><i class="fa fa-calendar"></i> History Harian</a></li>
            <li><a href="<?php echo base_url('index.php/Transaksi/total_harian') ;?>"><i class="fa fa-calendar"></i> Total Harian</a></li>
            <li><a href="<?php echo base_url('index.php/Transaksi/total_bulanan') ;?>"><i class="fa fa-calendar"></i> Total Bulanan</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="<?php echo base_url('index.php/Data_hutang') ;?>">
            <i class="fa fa-book"></i>
            <span>Data Hutang</span>
          </a>

        <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/Data_hutang/') ;?>"><i class="fa fa-book"></i> Hutang Perorangan</a></li>
            <li><a href="<?php echo base_url('index.php//Data_hutang/toko') ;?>"><i class="fa fa-book"></i> Hutang Toko</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url('index.php/Data_admin') ;?>">
            <i class="fa fa-user"></i> <span>Data Admin</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('index.php/Login/logout'); ?>">
            <i class="fa fa-close"></i> <span>Keluar</span>
          </a>
        </li>
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
