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
                            <h3 class="card-title">Data Artikel</h3>
                        </div>
                        <!-- /Navbar Content -->
                        <!-- Page Content -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date Insert</th>
                                        <th>Judul Artikel</th>
                                        <th>Nama Penulis</th>
                                        <th>Status</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $i = 1;
                                    foreach($dataArtikel as $rowArtikel){?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$rowArtikel->artikel_date_insert?></td>
                                        <td><?=$rowArtikel->artikel_judul?></td>
                                        <?php
                                            foreach($dataPetugas as $rowPetugas){
                                                if($rowArtikel->artikel_petugas_id == $rowPetugas->petugas_id){?>
                                                    <td><?=$rowPetugas->petugas_nama?></td>
                                        <?php  } } ?>
                                        <?php if($rowArtikel->artikel_status == 1){ ?>
                                            <td class=" ">Publish</td>
                                        <?php }else if($rowArtikel->artikel_status == 2){ ?>
                                            <td class=" ">Draft</td>
                                        <?php } ?>
                                        
                                        <td>
                                            <?php
                                                foreach($dataArtikelKategori as $rowArtikelKategori){
                                                    if($rowArtikel->artikel_id == $rowArtikelKategori->arkat_artikel_id){?>
                                                            <li><?=$rowArtikelKategori->kategori_nama?></li>
                                            <?php } } ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/ArtikelKategori/viewViewArtikelKategori/'.$rowArtikel->artikel_id)?>">
                                                <button class="btn btn-sm btn-success" id="btn-lihat">Lihat</button>
                                            </a>

                                            <!-- <a href="<?= base_url('admin/ArtikelKategori/viewEditArtikelKategori/'.$rowArtikel->artikel_id)?>">
                                                <button class="btn btn-sm btn-warning" id="btn-lihat">Edit</button>
                                            </a> -->
                                            
                                            <a href="<?= base_url('admin/Artikel/deleteArtikel/'.$rowArtikel->artikel_id)?>">
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