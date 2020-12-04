<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
                  <div class="badge badge-primary text-wrap">
                  <h5>  Welcome <?php echo $this->session->userdata('nama') ?> </h5>
                  </div>
                </a>
              </div>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">LUCKY RENTALS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LR</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('admin/data_mobil') ?>"><i class="fas fa-car"></i> <span>Data Kendaraan</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('admin/data_type') ?>"><i class="fas fa-grip-horizontal"></i> <span>Data Type</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/data_customer') ?>"><i class="fas fa-user"></i> <span>Data Customer</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>
              <!-- <li><a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li> -->
            </ul>
              <div class="mt-4 mb-2 p-3 hide-sidebar-mini">
                <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-danger btn-lg btn-block btn-icon-split">
                  <i class="fas fa-sign-out-alt"></i> LogOut
                </a>
              </div>
                <div class="mt-2 mb-4 p-3 hide-sidebar-mini">
                <a href="<?php echo base_url('auth/ganti_password') ?>" class="btn btn-warning btn-lg btn-block btn-icon-split">
                  <i class="fas fa-lock"></i> Ganti Password
                </a>
              </div>
        </aside>
      </div>
