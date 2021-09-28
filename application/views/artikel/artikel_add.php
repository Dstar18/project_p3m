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
                                    <form action="<?=base_url('admin/Artikel/addArtikel')?>" method="POST">
                                        <div class="card-body pad">
                                        
                                            <input type="hidden" id="artikelDateInsert" name="artikelDateInsert" value="<?php echo date('Y-m-d h:i:sa');?>" class="form-control">
                                            <input type="hidden" id="artikelDateUpdate" name="artikelDateUpdate" value="<?php echo date('Y-m-d h:i:sa');?>" class="form-control">

                                            <div class="form-group ">
                                                <label for="artikelJudul">Judul</label>
                                                <input type="text" id="artikelJudul" name="artikelJudul" class="form-control">
                                            </div>

                                            <div class="form-group ">
                                                <label for="artikelpetugasId">Nama Penulis</label>
                                                <input type="text" id="artikelpetugasId" name="artikelpetugasId" class="form-control">
                                            </div>

                                          
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="artikelkategoriId" id="artikelkategoriId" class="form-control">
                                                <!-- <option value="">- Pilih Kategori</option> -->
                                                <?php foreach($dataKategori as $rowKategori){ ?>
                                                    <option value="<?=$rowKategori->kategori_id?>"><?=$rowKategori->kategori_nama?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="artikelImgName">Gambar Sampul</label>
                                                <input type="file" class="form-control-file" name="artikelImgName" id="artikelImgName">
                                            </div>
                                              

                                            <div>
                                                <label for="artikelContent">Konten</label>
                                                <textarea class="textarea" id="artikelContent" name="artikelContent" placeholder="Place some text here" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="custom-select" id="artikelStatus" name="artikelStatus">
                                                    <option value="1">Publish</option>
                                                    <option value="2">Draft</option>
                                                </select>
                                            </div>
                                             
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('admin/Artikel')?>">
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