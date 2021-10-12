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
                                        <h3 class="card-title">EDIT DATA PETUGAS</h3>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->
                                    <form action="<?=base_url('admin/Petugas/editPetugas')?>" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="petugasNama">Nama</label>
                                                <input type="hidden" id="petugasId" name="petugasId" value="<?=$dataPetugas->petugas_id?>" class="form-control">
                                                <input type="text" id="petugasNama" name="petugasNama" value="<?=$dataPetugas->petugas_nama?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="petugasEmail">Email</label>
                                                <input type="text" id="petugasEmail" name="petugasEmail" value="<?=$dataPetugas->petugas_email?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="petugasNohp">No HP</label>
                                                <input type="number" id="petugasNohp" name="petugasNohp" value="<?=$dataPetugas->petugas_nohp?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="petugasUsername">Username</label>
                                                <input type="text" id="petugasUsername" name="petugasUsername" value="<?=$dataPetugas->petugas_username?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="petugasPassword">Password</label>
                                                <input type="text" id="petugasPassword" name="petugasPassword" value="<?=$dataPetugas->petugas_password?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Level</label>
                                                <select class="custom-select" id="petugasLevel" name="petugasLevel">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Penulis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('admin/Petugas')?>">
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