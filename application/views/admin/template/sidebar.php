<!DOCTYPE html>
<html lang="en">
<style type="text/css">
.bg-biru{
  background-color:   #4169E1;
} 
body
  font-family: 'tahoma', sans-serif !important;
}
  #status {
            background-image: url("<?= base_url() ?>/assets/img/Logo-BMKG-new.gif");
            }
</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stamet Raja Haji Fisabilillah</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
        <ul class="navbar-nav bg-biru sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-1">Stamet Raja Haji Fisabilillah</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
         <a class="nav-link" href="<?php echo base_url('admin/#') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <div class="sidebar-heading">
  
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a> -->
      <!--   <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>
 -->
      <!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/input_profil') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Struktur Organisasi</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/visi') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Visi Misi</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/input_artikel') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Artikel</span></a>
      </li>

      <hr class="sidebar-divider">

            <div class="sidebar-heading">
             
            </div>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/input_dokumen') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Buletin</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('prospek_cuaca') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Prospek Cuaca</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/tampil_saran') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Pertanyaan dan Saran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    