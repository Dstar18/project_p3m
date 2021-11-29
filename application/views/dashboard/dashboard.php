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
                        <!-- Navbar Content -->
                        <!-- <div class="card-header">
                            <h3 class="card-title">Dashboard</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button> -->
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            <!-- </div>
                        </div> -->
                        <!-- /Navbar Content -->
                        
                        <!-- Page Content -->
                        <div class="container-fluid">
                            <div class="row">
                                <!-- small box 1 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-info">
                                        <?php if($this->fungsi->petugas_login()->petugas_level == 1 || $this->fungsi->petugas_login()->petugas_level == 2) {?>
                                            <div class="inner">
                                                <h3><?=$dataArtikel->total?></h3>
                                                <p>Data Artikel</p>
                                            </div>
                                            <a href="<?= base_url('admin/ArtikelKategori')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /small box 1 -->
                                <!-- small box 2 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-success">
                                        <?php if($this->fungsi->petugas_login()->petugas_level == 1 || $this->fungsi->petugas_login()->petugas_level == 2) {?>
                                            <div class="inner">
                                                <h3><?=$dataPengumuman->total?></h3>
                                                <p>Data Pengumuman</p>
                                            </div>
                                            <a href="<?= base_url('admin/PengumumanKategori')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /small box 2 -->
                                <!-- small box 3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-warning">
                                        <?php if($this->fungsi->petugas_login()->petugas_level == 1 || $this->fungsi->petugas_login()->petugas_level == 2) {?>
                                            <div class="inner">
                                                <h3><?=$dataKategori->total?></h3>
                                                <p>Data Kategori</p>
                                            </div>
                                            <a href="<?= base_url('admin/Kategori')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /small box 3 -->
                                <!-- small box 4 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-danger">
                                        <?php if($this->fungsi->petugas_login()->petugas_level == 1) {?>
                                            <div class="inner">
                                                <h3><?=$dataPetugas->total?></h3>
                                                <p>Data Petugas</p>
                                            </div>
                                            <a href="<?= base_url('admin/Petugas')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /small box 4 -->
                            </div>
                        </div>
                        <!-- /Page Content -->

                        <!-- Footer Content -->
                        <!-- <div class="card-footer">
                            Footer
                        </div> -->
                        <!-- /Footer Content -->
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