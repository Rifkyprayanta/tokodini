<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Agen Toko Dini</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ;?>"> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Ionicons/css/ionicons.min.css') ;?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/dist/css/AdminLTE.min.css') ;?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/dist/css/skins/_all-skins.min.css') ;?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/morris.js/morris.css') ;?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/jvectormap/jquery-jvectormap.css') ;?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ;?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-daterangepicker/daterangepicker.css') ;?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/datatables/css/dataTables.bootstrap.css'); ?>">

  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ;?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php $this->load->view('navbar/navbar'); ?>

      <aside class="main-sidebar">
      <?php $this->load->view('sidebar/sidebar'); ?>
      </aside>

      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $judul ?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $judul ?></h3>
            </div>
            <div class="box-body">
            <?php 
              if(!empty($content)){
              echo $content;
              }
            
            ?>
          </div>
          </div>
        </div>
      </div>
    </section>

    </div>
  
<script src="<?php echo base_url('assets/jquery/jquery-3.3.1.min.js') ;?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/jquery/jquery-ui.min.js') ;?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ;?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/datatables/datatables/js/jquery.dataTables.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/datatables/datatables/js/dataTables.bootstrap.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/raphael/raphael.min.js') ;?>"></script>
<script src="<?php echo base_url('assets/morris.js/morris.min.js') ;?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/jquery-sparkline/dist/jquery.sparkline.min.js') ;?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/jvectormap/jquery-jvectormap-1.2.2.min.js') ;?>"></script>
<script src="<?php echo base_url('assets/jvectormap/jquery-jvectormap-world-mill-en.js') ;?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/jquery-knob/dist/jquery.knob.min.js') ;?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/moment/min/moment.min.js') ;?>"></script>
<script src="<?php echo base_url('assets/bootstrap-daterangepicker/daterangepicker.js') ;?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ;?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ;?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/jquery-slimscroll/jquery.slimscroll.min.js') ;?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/fastclick/lib/fastclick.js') ;?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/dist/js/adminlte.min.js') ;?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/template/dist/js/pages/dashboard.js') ;?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/template/dist/js/demo.js') ;?>"></script>

<script>
    $(document).ready(function() {
    $('#tabel').DataTable();
    } );
  </script>
  </body>
</html>