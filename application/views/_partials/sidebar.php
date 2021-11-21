  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Brand Logo -->
    <a href="<?= base_url('admin/Dashboard')?>" class="brand-link">
      <img src="<?= base_url()?>upload/imglogo/<?=$this->fungsi->pengaturan_web()->pengaturan_logo?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?=$this->fungsi->pengaturan_web()->pengaturan_nama?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url()?>upload/imgpetugas/<?=$this->fungsi->petugas_login()->petugas_img_profil?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$this->fungsi->petugas_login()->petugas_nama?></a>
        </div>
    </div>

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <?php if($this->fungsi->petugas_login()->petugas_level == 1 || $this->fungsi->petugas_login()->petugas_level == 2) {?>
                <a href="<?= base_url('admin/ArtikelKategori/viewAddArtikelKategori')?>" class="nav-link">
                    <i class="nav-icon fas fa-plus"></i>
                    <p>POSTINGAN BARU</p>
                </a>
            <?php } ?>
        </li>
    </ul>

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

                <!-- Menu Artikel -->
                <?php if($this->fungsi->petugas_login()->petugas_level == 1 || $this->fungsi->petugas_login()->petugas_level == 2) {?>
                <li class="nav-item">
                    <a href="<?= base_url('admin/ArtikelKategori')?>" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <?php } ?>

                <!-- Menu Kategori -->
                <?php if($this->fungsi->petugas_login()->petugas_level == 1 || $this->fungsi->petugas_login()->petugas_level == 2) {?>
                <li class="nav-item">
                    <a href="<?= base_url('admin/Kategori')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <?php } ?>

                <!-- Menu Halaman -->
                <?php if($this->fungsi->petugas_login()->petugas_level == 1) {?>
                <li class="nav-item">
                    <a href="<?= base_url('admin/Halaman')?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Halaman</p>
                    </a>
                </li>
                <?php } ?>

                <!-- Menu Pengaturan Website -->
                <?php if($this->fungsi->petugas_login()->petugas_level == 1) {?>
                <li class="nav-item">
                    <a href="<?= base_url('admin/Pengaturan')?>" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>Pengaturan Website</p>
                    </a>
                </li>
                <?php } ?>

                <!-- Menu Data Petugas -->
                <?php if($this->fungsi->petugas_login()->petugas_level == 1) {?>
                <li class="nav-item">
                    <a href="<?= base_url('admin/Petugas')?>" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>Data Petugas</p>
                    </a>
                </li>
                <?php } ?>

                <!-- Lihat WEB -->
                <li class="nav-item">
                    <a href="<?= base_url()?>" target="_blank" class="nav-link">
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