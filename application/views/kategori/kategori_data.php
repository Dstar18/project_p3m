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
                            <h3 class="card-title">Data Kategori</h3>
                            <div class="card-tools">
                                <a href="<?= base_url('admin/Kategori/viewAddKategori')?>">
                                <button type="button" class="btn btn-block btn-primary">
                                    Tambah Data
                                </button>
                                </a>
                            </div>
                        </div>
                        <!-- /Navbar Content -->
                        <!-- Page Content -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                    $i = 1;
                                    foreach($dataKategori as $rowKategori){ ?>
                                        <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$rowKategori->kategori_nama?></td>
                                            <td>
                                                <a href="<?= base_url('admin/Kategori/viewEditKategori/'.$rowKategori->kategori_id)?>">
                                                    <button class="btn btn-sm btn-warning" id="btn-edit">Edit</button>
                                                </a>
                                                <a href="<?= base_url('admin/Kategori/deleteKategori/'.$rowKategori->kategori_id)?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
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