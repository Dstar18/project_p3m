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

            <!-- Main Content -->
            <section class="content">
            <form action="<?=base_url('admin/Artikel/editArtikel')?>" enctype="multipart/form-data" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Artikel</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Waktu -->
                                    <input type="text" name="artikel_date_insert" value="<?=$dataArtikel->artikel_date_insert?>" class="form-control" readonly>
                                    <input type="text" name="artikel_date_update" value="<?php echo date('Y-m-d h:i:sa');?>" class="form-control" readonly>

                                    <!-- ID Penulis/Admin -->
                                    <input type="text" name="artikel_petugas_id" class="form-control" value="<?=$this->fungsi->petugas_login()->petugas_id?>" readonly>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="artikel_judul" value="<?=$dataArtikel->artikel_judul?>" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="artikel_content" id="compose-textarea" class="form-control" style="height: 300px"><?=$dataArtikel->artikel_content?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="artikel_sampul">Gambar Sampul</label>
                                        <input type="file" id="artikel_sampul" name="artikel_sampul" class="form-control" >
                                        <input type="text" id="artikel_sampul_old" name="artikel_sampul" class="form-control" value="<?=$dataArtikel->artikel_sampul?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <!-- <?=$dataKategori->kategori_nama?> -->
                                        <?php foreach($dataArtikelKategori as $rowdataArtikelKategori){?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="arkatKategoriId[]" id="arkatKategoriId" value="<?=$dataArtikelKategori->kategori_id?>">
                                                <label class="form-check-label"><?=$dataArtikelKategori->kategori_nama?></label>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" id="artikel_status" name="artikel_status">
                                            <option value="1">Publish</option>
                                            <option value="2">Draft</option>
                                        </select>
                                    </div>

                                    <a href="<?= base_url('admin/ArtikelKategori')?>">
                                        <button type="button" class="btn btn-danger btn-block">Cancel</button>
                                    </a><p></p>
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
                </div>
                </form>
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