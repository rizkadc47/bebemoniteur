<!DOCTYPE html>
<!--
This is a Kredit Motor template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BEBE MONITEUR | Aplikasi Pantau Kehamilan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
    <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url('');?>assets/css/bootstrap-datetimepicker.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/font-awesome-4.6.3/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/ionicons-2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/datepicker/datepicker3.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header" style="background-color: #eda5a6">

    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <style>
          img {width: 10px;}
          img {height: 10px;}
        </style>
        <img src='/assets/img/bebeicon.png' alt='bebeicon'/>
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style='color: white'>BEBE MONITEUR</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style='color: white'>
        <span class="sr-only">Toggle navigation</span>
      </a>
        <style>
          h3 {color: white;}
          h3 {font-size: 20px;}
          h3 {margin-top: 12px;}
          h3 {text-align: left;}
        </style>

        <h3> Aplikasi Pantau Kehamilan</h3>
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          
          <!-- User Account Menu -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #989292">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/upload/avatars/'.$this->session->userdata('PHOTO'));?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("NAME");?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Cari">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo site_url('beranda');?>"><i class="fa fa-home fa-lg"style='color: #c1c1c1'></i> <span style='color: white'>Beranda</span></a></li>
        <li><a href="<?php echo site_url('mobil');?>"><i class="fa fa-user" style='color: #c1c1c1'></i> <span style='color: white'>Profil</span></a></li>
        <li><a href="<?php echo site_url('pembayaran');?>"><i class="fa fa-credit-card-alt" style='color: #c1c1c1'></i> <span style='color: white'>Pembayaran</span></a></li> 
        <li><a href="<?php echo site_url('transaksi');?>"><i class="fa fa-check-square-o" style='color: #c1c1c1'></i> <span style='color: white'>Konfirmasi Pembayaran</span></a></li>  
        <li><a href="<?php echo site_url('tentangaplikasi');?>"><i class="fa fa-info-circle" style='color: #c1c1c1'></i> <span style='color: white'>Tentang Aplikasi</span></a></li>
        <li><a href="<?php echo site_url("Login/logout");?>"><i class="fa fa-sign-out" style='color: #c1c1c1'></i> <span style='color: white'>Logout</span></a></li>
    <!--     <li><a href="<?php echo site_url('users');?>"><i class="fa fa-area-chart"></i> <span>Denda</span></a></li>   -->             
        <!-- <li><a href="<?php echo site_url('users');?>"><i class="fa fa-user"></i> <span>Users</span></a></li>               
<!--         <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>Coustomers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('pembeli');?>"><i class="fa fa-angle-double-right"></i>Form Data Coustomers</a></li>
            <li><a href="<?php echo site_url('pembeli/view_pembeli');?>"><i class="fa fa-angle-double-right"></i>List Coustomers</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-motorcycle"></i> <span>Motor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('motor');?>"><i class="fa fa-angle-double-right"></i>Form Detail Motor</a></li>
            <li><a href="<?php echo site_url('motor/view_list_motor');?>"><i class="fa fa-angle-double-right"></i>List Motor</a></li>
            <li><a href="<?php echo site_url('motor/merk');?>"><i class="fa fa-angle-double-right"></i>Merk Motor</a></li>
            <li><a href="<?php echo site_url('motor/tipe');?>"><i class="fa fa-angle-double-right"></i>Tipe Motor</a></li>
            <li><a href="<?php echo site_url('motor/warna');?>"><i class="fa fa-angle-double-right"></i>Warna Motor</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Order Cash</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('pembeli_cash');?>"><i class="fa fa-angle-double-right"></i>Form Order Cash</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>List Order Cash</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-check"></i> <span>Order Kredit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('pembeli_cash');?>"><i class="fa fa-angle-double-right"></i>Form Order Cash</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>List Order Cash</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-building"></i> <span>Paket Kredit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('paket_kredit');?>"><i class="fa fa-angle-double-right"></i>Form Paket Kredit</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>List Paket Kredit</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Bayar Cicilan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('pembeli_cash');?>"><i class="fa fa-angle-double-right"></i>Form Order Cash</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>List Order Cash</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-user-plus"></i> <span>Karyawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('karyawan');?>"><i class="fa fa-angle-double-right"></i>Form Detail Karyawan</a></li>
            <li><a href="<?php echo site_url('karyawan/view_karyawan');?>"><i class="fa fa-angle-double-right"></i>List Karyawan</a></li>
            <li><a href="<?php echo site_url('karyawan/posisi');?>"><i class="fa fa-angle-double-right"></i>Posisi Karyawan</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>