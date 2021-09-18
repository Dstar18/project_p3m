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
                    <div class="card">
                        <!-- Navbar Content -->
                        <div class="card-header">
                            <h3 class="card-title">ARTIKEL</h3>
                            <div class="card-tools">
                                <a href="<?= base_url('admin/Artikel/viewAddArtikel')?>">
                                <button type="button" class="btn btn-block btn-primary">
                                    Tambah Data
                                </button>
                                </a>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            </div>
                        </div>
                        <!-- /Navbar Content -->
                        <!-- Page Content -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Artikel</th>
                                        <th>Author</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $i = 1;
                                    foreach($dataArtikel as $rowArtikel){?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$rowArtikel->artikel_date_update?></td>
                                        <td><?=$rowArtikel->artikel_judul?></td>
                                        <td><?=$rowArtikel->pengguna_nama?></td>
                                        <td><?=$rowArtikel->kategori_nama?></td>
                                        <td><?=$rowArtikel->artikel_status?></td>
                                        
                                        <td>
                                            <a href="<?= base_url('admin/Artikel/viewLihatArtikel')?>">
                                                <button class="btn btn-sm btn-success" id="btn-lihat">Lihat</button>
                                            </a>
                                            <a href="<?= base_url('admin/Artikel/viewEditArtikel')?>">
                                                <button class="btn btn-sm btn-warning" id="btn-edit">Edit</button>
                                            </a>
                                            <a href="<?= base_url('admin/Artikel/deleteArtikel')?>">
                                                <button class="btn btn-sm btn-danger" id="btn-delete">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
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
        </div>

        <!-- JS -->
        <?php $this->load->view('_partials/js.php');?>
        <!-- /JS -->
    </body>
</html>