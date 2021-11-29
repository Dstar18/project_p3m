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
            <section class="content row">
            
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Read Pengumuman</h3>
                                    <?php if($dataPengumuman->pengumuman_status == 1){ ?>
                                        <button class="btn-sm-xs btn-primary">Publish</button>
                                    <?php }else if($dataPengumuman->pengumuman_status == 2){ ?>
                                        <button class="btn-sm-xs btn-warning">Draft</button>
                                    <?php } ?>
                            </div>
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5><?=$dataPengumuman->pengumuman_judul?></h5>
                                    <h6><?=$dataPengumuman->petugas_nama?>
                                        <span class="mailbox-read-time float-right"><?=$dataPengumuman->pengumuman_date_insert?></span><br>
                                        <span class="mailbox-read-time float-right"><?=$dataPengumuman->pengumuman_date_update?></span>
                                    </h6>
                                </div>
                                <div class="mailbox-read-message">
                                    <?=$dataPengumuman->pengumuman_content?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="pengumuman_sampul">Gambar Sampul</label>
                                    <img src="<?= base_url()?>upload/imgsampul/<?=$dataPengumuman->pengumuman_sampul?>" width="250" height="225">
                                </div>

                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <div class="form-check">
                                   
                                        <?php foreach($dataPengumumanKategori as $rowPengumumanKategori){
                                                ?>
                                                <li><?=$rowPengumumanKategori->kategori_nama?></li>
                                        <?php }  ?>
                                   
                                    </div>
                                </div>

                                <a href="<?= base_url('admin/PengumumanKategori')?>">
                                    <button type="button" class="btn btn-danger btn-block">Cancel</button>
                                </a><p></p>
                                <a href="<?= base_url('admin/PengumumanKategori/viewEditPengumumanKategori/'.$dataPengumuman->pengumuman_id)?>">
                                    <button type="submit" class="btn btn-warning btn-block">Edit</button>
                                </a>

                            </div>
                            
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