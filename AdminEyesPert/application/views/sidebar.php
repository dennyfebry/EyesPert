<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>index.php/admin/index">
    <div class="sidebar-brand-icon rotate-n-15">
    <img class="img-profile rounded-circle" width="70px" src="<?php echo base_url() ?>public/img/Logo-splash2.png">
      <!-- <i class="fas fa-car"></i> -->
    </div>
    <div class="sidebar-brand-text mx-3">Admin <sup>EyesPert</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/index">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Beranda</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Tabel
  </div>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/gejala">
      <i class="fas fa-fw fa-table"></i>
      <span>Gejala</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/penyakit">
      <i class="fas fa-fw fa-table"></i>
      <span>Penyakit</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/pengetahuan">
      <i class="fas fa-fw fa-table"></i>
      <span>Pengetahuan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/tentang">
      <i class="fas fa-fw fa-table"></i>
      <span>Tim Pengembang</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->