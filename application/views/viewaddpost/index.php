<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
    </head> 

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            
            <!-- Top Navbar -->
            <?php $this->load->view('_partials/navbar.php');?>
            <!-- /Top Navbar -->

            <!-- Left Sidebar -->
            <?php $this->load->view('_partials/sidebar.php');?>
            <!-- /Left Sidebar -->
            
            <!-- Main Content -->
            <div class="content-wrapper">
            
            <!-- Breadcrumb -->
            <?php $this->load->view('_partials/breadcrumb.php');?>
            <!-- /Breadcrumb -->
            
                <section class="content">
                    <div class="container-fluid">
                        <!-- Page Content -->
                        <div class="container-fluid">
                            <div class="row">
                                <!-- small box 1 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-info">
                                        <?php if($this->fungsi->petugas_login()->petugas_level == 1 || $this->fungsi->petugas_login()->petugas_level == 2) {?>
                                            <div class="inner">
                                                <h3>Artikel</h3>
                                                <p>Add Artikel</p>
                                            </div>
                                            <a href="<?= base_url('admin/ArtikelKategori/viewAddArtikelKategori')?>" class="small-box-footer">Postingan Baru <i class="fas fa-arrow-circle-right"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /small box 1 -->
                                <!-- small box 2 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-success">
                                        <?php if($this->fungsi->petugas_login()->petugas_level == 1 || $this->fungsi->petugas_login()->petugas_level == 2) {?>
                                            <div class="inner">
                                                <h3>Pengumuman</h3>
                                                <p>Add Pengumuman</p>
                                            </div>
                                            <a href="<?= base_url('admin/PengumumanKategori/viewAddPengumumanKategori')?>" class="small-box-footer">Postingan Baru <i class="fas fa-arrow-circle-right"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /small box 2 -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /Main Content -->

            <!-- Footer -->
            <?php $this->load->view('_partials/footer.php');?>
            <!-- /Footer -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>

        <!-- JS -->
        <?php $this->load->view('_partials/js.php');?>
        <!-- /JS -->
    </body>
</html>