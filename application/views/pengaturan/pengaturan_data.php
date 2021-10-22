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
                    <?php
                    foreach($dataPengaturan as $rowPengaturan){ ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <!-- Navbar Content -->
                                    <div class="card-header">
                                        <h3 class="card-title">Data Pengaturan</h3>
                                        <div class="card-tools">
                                            <a href="<?= base_url('admin/Pengaturan/viewEditPengaturan/'.$rowPengaturan->pengaturan_id)?>">
                                            <button type="button" class="btn btn-block btn-warning">
                                                Edit Data
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->
                                    
                                    
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="pengaturanNama">Nama Website</label>
                                                <input type="text" id="pengaturanNama" name="pengaturanNama" value="<?=$rowPengaturan->pengaturan_nama?>" class="form-control" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanLogo">Logo</label>
                                                <input type="text" id="pengaturanLogo" name="pengaturanLogo" value="<?=$rowPengaturan->pengaturan_logo?>" class="form-control" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanTelp">No Telefon</label>
                                                <input type="number" id="pengaturanTelp" name="pengaturanTelp" value="<?=$rowPengaturan->pengaturan_telp?>" class="form-control" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanFb">Link Facebook</label>
                                                <input type="text" id="pengaturanFb" name="pengaturanFb" value="<?=$rowPengaturan->pengaturan_fb?>" class="form-control" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanIg">Link Instagram</label>
                                                <input type="text" id="pengaturanIg" name="pengaturanIg" value="<?=$rowPengaturan->pengaturan_ig?>" class="form-control" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanYtb">Link Youtube</label>
                                                <input type="text" id="pengaturanYtb" name="pengaturanYtb" value="<?=$rowPengaturan->pengaturan_ytb?>" class="form-control" readonly>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
                    <?php }?>
                </section>
            </div>
            <!-- /Main Content -->

            <!-- Footer -->
            <?php $this->load->view('_partials/footer.php');?>
            <!-- /Footer -->

        </div>

        <!-- JS -->
        <?php $this->load->view('_partials/js.php');?>
        <!-- /JS -->
        
    </body>
</html>