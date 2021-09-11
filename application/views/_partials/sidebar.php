  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?= base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">P3M ITDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url()?>assets/images/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              
                <!-- Menu Dashboard -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Dashboard')?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Menu Kategori -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Kategori')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <!-- Menu Artikel -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Artikel')?>" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Artikel</p>
                    </a>
                </li>

                <!-- Menu Pages
                <li class="nav-item">
                    <a href="<?= base_url('admin/Pages')?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Pages</p>
                    </a>
                </li> -->

                <!-- Menu Pengaturan Website -->
                <li class="nav-item">
                    <a href="<?= base_url('Pengaturan_website')?>" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>Pengaturan Website</p>
                    </a>
                </li>

                <!-- Menu Data Petugas -->
                <li class="nav-item">
                    <a href="<?= base_url('Petugas')?>" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>Data Petugas</p>
                    </a>
                </li>

                <!-- Lihat WEB -->
                <li class="nav-item">
                    <a href="<?= base_url()?>" class="nav-link">
                        <i class="nav-icon fa fa-eye"></i>
                        <p>Lihat Website</p>
                    </a>
                </li>
            
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>