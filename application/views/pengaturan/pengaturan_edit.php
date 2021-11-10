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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <!-- Navbar Content -->
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Data Pengaturan</h3>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->

                                    <form action="<?=base_url('admin/Pengaturan/editPengaturan') ?>" enctype="multipart/form-data" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="pengaturanNama">Nama Website</label>
                                                <input type="hidden" name="pengaturan_id" value="<?=$dataPengaturan->pengaturan_id?>" class="form-control">
                                                <input type="text" name="pengaturan_nama" value="<?=$dataPengaturan->pengaturan_nama?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanLogo">Logo</label>
                                                <input type="file" name="pengaturan_logo" class="form-control" >
                                                <input type="text" name="pengaturan_logo_old" class="form-control" value="<?=$dataPengaturan->pengaturan_logo?>"  readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanTelp">No Telefon</label>
                                                <input type="number" name="pengaturan_telp" value="<?=$dataPengaturan->pengaturan_telp?>" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanFb">Link Facebook</label>
                                                <input type="text" name="pengaturan_fb" value="<?=$dataPengaturan->pengaturan_fb?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanIg">Link Instagram</label>
                                                <input type="text" name="pengaturan_ig" value="<?=$dataPengaturan->pengaturan_ig?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanYtb">Link Youtube</label>
                                                <input type="text" name="pengaturan_ytb" value="<?=$dataPengaturan->pengaturan_ytb?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('admin/Pengaturan')?>">
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
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