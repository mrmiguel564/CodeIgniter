<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="far fa-id-card"></i>
        </div>
        <div class="sidebar-brand-text mx">Carnet<sup>Digital<sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="tratamientos.html">
          <i class="fas fa-medkit"></i>
          <span>Tratamientos</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">											
        <a class="nav-link" href="medicos.html">
          <i class=" fas fa-user-md"></i>
          <span>Medicos</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fab fa-accessible-icon"></i>
          <span>Cargas</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Cargas:</h6>
            <a class="collapse-item active" href="cargas.html">Juanito
				<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"></a>
          </div>
        </div>
      </li>  
	  <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        configuracion
      </div>

       <!-- Nav Item - Dashboard -->
      <li class="nav-item">											
        <a class="nav-link" href="cuenta.html">
          <i class="fas fa-fw fa-cog"></i>
          <span>Cuenta</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
        <!-- End of Sidebar -->