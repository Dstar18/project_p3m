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
                                   <h2><?=$dataHalaman->halaman_judul?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="well-middle">
                                    <div class="single-well">
                                        <center>
                                            <img src="<?= base_url()?>upload/imgsampul/1struktur.png" alt="">
                                        </center>
                                        <p>
                                            <?=$dataHalaman->halaman_content?> 
                                        </p>
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