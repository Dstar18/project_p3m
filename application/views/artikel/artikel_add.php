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
                                <div class="card card-outline card-info">
                                    <!-- Navbar Content -->
                                    <div class="card-header">
                                        <h3 class="card-title">KONTEN ARTIKEL</h3>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->
                                    <div class="card-body pad">
                                        <div class="form-group ">
                                            <label for="judulArtikel">Judul</label>
                                            <input type="text" id="judulArtikel" class="form-control">
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">-Pilih Kategori</option>
                                                        <option>Kategori1</option>
                                                        <option>Kategori2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <label for="judulArtikel">Konten</label>
                                            <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                        
                                        <div class="card-footer">
                                        <a href="<?= base_url('admin/Artikel')?>">
                                            <button type="submit" name="status" value="Cancel" class="btn btn-danger">Cancel</button>
                                        </a>
                                            <button type="submit" name="status" value="Draft" class="btn btn-warning">Draft</button>
                                            <button type="submit" name="status" value="Publish" class="btn btn-success">Publish</button>
                                        </div>
                                    </div>
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