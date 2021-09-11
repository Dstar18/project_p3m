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
                                        <h3 class="card-title">TAMBAH DATA KATEGORI</h3>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->
                                    <form action="<?=base_url('admin/Kategori/editKategori')?>" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="kategoriNama">Nama Kategori</label>
                                                <input type="hidden" id="kategoriId" name="kategoriId" value="<?=$dataKategori->kategori_id?>" class="form-control">
                                                <input type="text" id="kategoriNama" name="kategoriNama" value="<?=$dataKategori->kategori_nama?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('admin/Kategori')?>">
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