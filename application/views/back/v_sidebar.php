<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(). 'home_b'?>" class="brand-link">
    <span class="brand-text font-weight-light">Simpro Natasa</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-file-signature"></i>
            <p>
              Input Data
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url() . 'home_b/pk' ?>" class="nav-link">
                <i class="fas fa-ruler-vertical"></i>
                <p>Perbup Penetapan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'home_b/bk' ?>" class="nav-link">
                <i class="fas fa-balance-scale"></i>
                <p>BA Kesepakatan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-th-list"></i>
                <p>BA Sengketa</p>
              </a>
            </li>
          </ul>
        </li>        
        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="fas fa-database"></i>
            <p>
              Master Data
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url() . 'home_b/kec' ?>" class="nav-link">
              <i class="far fa-circle"></i>
                <p>Data Kecamatan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'home_b/desa' ?>" class="nav-link">
              <i class="far fa-circle"></i>
                <p>Data Desa</p>
              </a>
            </li>            
          </ul>
        </li>        
        <li class="nav-item">
          <a href="<?php echo base_url() . 'home_b/pengguna' ?>" class="nav-link">
            <i class="fas fa-user-circle"></i>
            <p>
               Pengguna
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() . 'home_b/keluar' ?>" class="nav-link">
            <i class="nav-icon fa fa-share"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>