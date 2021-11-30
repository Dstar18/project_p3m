<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partialsWeb/head.php');?>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Top Navbar -->
            <?php $this->load->view('_partialsWeb/navbar.php');?>
            <!-- /Top Navbar -->

            <!-- carousel -->
            <?php $this->load->view('_partialsWeb/carousel.php');?>
            <!-- carousel -->
            
            <!-- Main Content -->
            <main id="main">
                
                <!-- ======= Blog Section Artikel ======= -->
                <div id="blog" class="blog-area">
                    <div class="blog-inner area-padding">
                        <div class="blog-overly"></div>
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-headline text-center">
                                        <h2>Artikel Terbaru</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Start Post Artikel -->
                                <?php foreach($dataArtikel as $rowArtikel){?>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a><img src="<?= base_url()?>upload/imgsampul/<?=$rowArtikel->artikel_sampul?>" width="300" height="275"></a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="date-type">
                                                    <i class="fa fa-calendar"></i><?=$rowArtikel->artikel_date_insert?>
                                                </span>
                                            </div>
                                            <div class="blog-text">
                                                <h4>
                                                    <a href="<?= base_url('website/ArtikelWeb/blog_detail/'.$rowArtikel->artikel_id)?>"><?=$rowArtikel->artikel_judul?></a>
                                                </h4>
                                                <p>
                                                    <?php $contentArtikel = substr($rowArtikel->artikel_content, 0, 200);
                                                        echo $contentArtikel;
                                                    ?>
                                                </p>
                                            </div>
                                            <span>
                                                <a href="<?= base_url('website/ArtikelWeb/blog_detail/'.$rowArtikel->artikel_id)?>" class="ready-btn">Read more</a>
                                            </span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- End Post Artikel-->
                                    
                                    <!-- View all post -->
                                    <div class="float-right">
                                        <br>
                                        <a href="<?=base_url('website/ArtikelWeb/blog/')?>" class="btn btn-secondary btn active" role="button" aria-pressed="true">View all post -></a>
                                    </div>
                                    <!-- /View all post --> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===== End Blog Section Artikel ===== -->
                
                <!-- ======= Blog Section Pengumuman ======= -->
                <div id="blog" class="blog-area">
                    <div class="blog-inner area-padding">
                        <div class="blog-overly"></div>
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-headline text-center">
                                        <h2>Pengumuman</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Start Post Artikel -->
                                <?php foreach($dataPengumuman as $rowPengumuman){?>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a><img src="<?= base_url()?>upload/imgsampul/<?=$rowPengumuman->pengumuman_sampul?>" alt="" width="300" height="275"></a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="date-type">
                                                    <i class="fa fa-calendar"></i><?=$rowPengumuman->pengumuman_date_insert?>
                                                </span>
                                            </div>
                                            <div class="blog-text">
                                                <h4>
                                                    <a href="<?= base_url('website/PengumumanWeb/pengumuman_detail/'.$rowPengumuman->pengumuman_id)?>"><?=$rowPengumuman->pengumuman_judul?></a>
                                                </h4>
                                                <p>
                                                    <?php $contentPengumuman = substr($rowPengumuman->pengumuman_content, 0, 200);
                                                        echo $contentPengumuman;
                                                    ?>
                                                </p>
                                            </div>
                                            <span>
                                                <a href="<?= base_url('website/PengumumanWeb/pengumuman_detail/'.$rowPengumuman->pengumuman_id)?>" class="ready-btn">Read more</a>
                                            </span>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- End Post Artikel-->
                                
                                <!-- View all post -->
                                <div class="float-right">
                                    <br>
                                    <a href="<?=base_url('website/PengumumanWeb/pengumuman/')?>" class="btn btn-secondary btn active" role="button" aria-pressed="true">View all post -></a>
                                </div>
                                <!-- /View all post --> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ====== End Blog Section Pengumuman ===== -->
            </main>
            <!-- /Main Content -->
            
            <!-- Footer -->
            <?php $this->load->view('_partialsWeb/footer.php');?>
            <!-- /Footer -->
        
        </div>
        
        <!-- JS -->
        <?php $this->load->view('_partialsWeb/js.php');?>
        <!-- /JS -->
    </body>
</html>