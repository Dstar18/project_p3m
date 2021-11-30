<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partialsWeb/head.php');?>
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Navbar -->
            <?php $this->load->view('_partialsWeb/navbar.php');?>
            <!-- /Top Navbar -->
            
            <!-- Main Content -->
            <main id="main">
                <!-- carouselBlog -->
                <?php $this->load->view('_partialsWeb/carouselBlog.php');?>
                <!-- /carouselBlog -->
                
                <!-- ======= Page Content ======= -->
                <div class="blog-page area-padding">
                    <div class="container">
                        <div class="row">
                            <!-- ===== Left Sidebar ===== -->
                            <div class="col-lg-4 col-md-4">
                                <div class="page-head-blog">
                                    <div class="single-blog-page">
                                        <!-- Menu Pencarian -->
                                        <form action="#">
                                            <div class="search-option">
                                                <input type="text" placeholder="Search...">
                                                <button class="button" type="submit">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <!-- /Menu Pencarian -->
                                    </div>
                                    
                                    <div class="single-blog-page">
                                        <!-- Menu Kategori -->
                                        <div class="left-blog">
                                            <h4>Categories</h4>
                                            
                                            <?php foreach($dataKategori as $rowKategori){?>
                                            <ul>
                                                <li>
                                                    <?=$rowKategori->kategori_nama?>
                                                </li>
                                            </ul>
                                            <?php }  ?>

                                        </div>
                                        <!-- /Menu Kategori -->
                                    </div>
                                    <div class="single-blog-page">
                                        <!-- Menu Archive -->
                                        <div class="left-blog">
                                            <h4>ARCHIVE</h4>
                                            <ul>
                                                <li>
                                                    <a href="#">2021</a>
                                                </li>
                                                <li>
                                                    <a href="#">2020</a>
                                                </li>
                                                <li>
                                                    <a href="#">2019</a>
                                                </li>
                                                <li>
                                                    <a href="#">2018</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /Menu Archive -->
                                    </div>
                                </div>
                            </div>
                            <!-- ===== /Left Sidebar ===== -->

                            <!-- ===== Single Blog ===== -->
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <!-- blog 1 detail -->
                                    <?php 
                                    foreach($dataArtikel as $rowArtikel){
                                    ?>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a>
                                                    <img src="<?= base_url()?>upload/imgsampul/<?=$rowArtikel->artikel_sampul?>" width="275" height="250">
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="date-type">
                                                    <i class="bi bi-calendar"></i><?=$rowArtikel->artikel_date_insert?>
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
                                    <!-- /blog 1 detail -->
                                    <!-- Button Next Link -->
                                    <div class="blog-pagination">
                                        <ul class="pagination">
                                            <li class="page-item"><a href="#" class="page-link">&lt;</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">&gt;</a></li>
                                        </ul>
                                    </div>
                                    <!-- /Button Next Link -->
                                </div>
                            </div>
                            <!-- ===== /Single Blog ===== -->
                        </div>
                    </div>
                </div>
                <!-- ======= /Page Content ======= -->
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