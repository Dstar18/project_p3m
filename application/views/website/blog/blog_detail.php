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
            
            <!-- Main Content -->
            <main id="main">

                <!-- carouselBlog -->
                <?php $this->load->view('_partialsWeb/carouselBlog.php');?>
                <!-- /carouselBlog -->

                <!-- BreadcrumbWeb -->
                <?php $this->load->view('_partialsWeb/breadcrumbWeb.php');?>
                <!-- BreadcrumbWeb -->

               <!-- ======= Page Content ======= -->
               <div id="about" class="about-area area-padding">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="section-headline text-center">
                                   <h2><?=$dataArtikel->artikel_judul?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="well-middle">
                                    <div class="single-well">
                                        <h4 class="sec-head">project Maintenance</h4>
                                        <!-- <a href="#">
                                            <img src="<?= base_url()?>assetsWeb/img/about/1.jpg" alt="">
                                        </a> -->
                                        <p>
                                        <?=$dataArtikel->artikel_content?>                                        </p>
                                        <ul>
                                            <li>
                                                <i class="bi bi-check"></i> Interior design Package
                                            </li>
                                            <li>
                                                <i class="bi bi-check"></i> Building House
                                            </li>
                                            <li>
                                                <i class="bi bi-check"></i> Reparing of Residentail Roof
                                            </li>
                                            <li>
                                                <i class="bi bi-check"></i> Renovaion of Commercial Office
                                            </li>
                                            <li>
                                                <i class="bi bi-check"></i> Make Quality Products
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End col-->
                        </div>
                    </div>
                </div><!-- End About Section -->
            
            </main>
            <!-- /Main Content -->

            <!-- BreadcrumbWeb -->
            <?php $this->load->view('_partialsWeb/space.php');?>
            <!-- BreadcrumbWeb -->

            <!-- Footer -->
            <?php $this->load->view('_partialsWeb/footer.php');?>
            <!-- /Footer -->

        </div>

        <!-- JS -->
        <?php $this->load->view('_partialsWeb/js.php');?>
        <!-- /JS -->
        
    </body>
</html>