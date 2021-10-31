<!DOCTYPE html>
<html lang="en">
    <head>
        <?php

use function PHPSTORM_META\type;

$this->load->view('_partials/head.php');?>
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

            <!-- Main Content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Data Halaman</h3>
                                </div>

                                <form action="<?=base_url('admin/Halaman/editHalaman')?>" method="POST">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <input type="hidden" id="halamanId" name="halamanId" value="<?=$dataHalaman->halaman_id?>" class="form-control">
                                            <input type="text" class="form-control" name="halamanJudul" value="<?=$dataHalaman->halaman_judul?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="halamanContent" id="compose-textarea" class="textarea" style="height: 300px" ><?=$dataHalaman->halaman_content?></textarea>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                            <a href="<?= base_url('admin/Halaman')?>">
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </form>

                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
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