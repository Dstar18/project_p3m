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
                <form action="<?=base_url('admin/ArtikelKategori/addArtikelKategori')?>" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">New Artikel</h3>
                                </div>
                                <div class="card-body">

                                    <input type="hidden" id="artikelDateInsert" name="artikelDateInsert" value="<?php echo date('Y-m-d h:i:sa');?>" class="form-control">
                                    <input type="hidden" id="artikelDateUpdate" name="artikelDateUpdate" value="<?php echo date('Y-m-d h:i:sa');?>" class="form-control">

                                    <div class="form-group ">
                                        <label for="arkatPetugasId">ID Penulis</label>
                                        <input type="number" id="arkatPetugasId" name="arkatPetugasId" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="artikelJudul" placeholder="Judul Artikel">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="artikelContent" id="compose-textarea" class="form-control" style="height: 300px"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="artikelSampul">Gambar Sampul</label>
                                        <input type="file" class="form-control-file" name="artikelSampul">
                                    </div>

                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <?php foreach($dataKategori as $rowKategori){?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="arkatKategoriId[]" id="arkatKategoriId" value="<?=$rowKategori->kategori_id?>">
                                                <label class="form-check-label"><?=$rowKategori->kategori_nama?></label>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" id="artikelStatus" name="artikelStatus">
                                            <option value="1">Publish</option>
                                            <option value="2">Draft</option>
                                        </select>
                                    </div>

                                    <button type="button" class="btn btn-danger btn-block">Cancel</button>
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