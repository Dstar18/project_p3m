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
                                        <!-- Recent Post -->
                                        <div class="left-blog">
                                            <h4>RECENT POST</h4>
                                            <div class="recent-post">
                                                <!-- single post -->
                                                <div class="recent-single-post">
                                                    <div class="post-img">
                                                        <a href="#">
                                                            <img src="assetsWeb/img/blog/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="pst-content">
                                                        <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                                    </div>
                                                </div>
                                                <!-- /single post -->
                                                <!-- single post -->
                                                <div class="recent-single-post">
                                                    <div class="post-img">
                                                        <a href="#">
                                                            <img src="assetsWeb/img/blog/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="pst-content">
                                                        <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                                    </div>
                                                </div>
                                                <!-- /single post -->
                                                <!-- single post -->
                                                <div class="recent-single-post">
                                                    <div class="post-img">
                                                        <a href="#">
                                                            <img src="assetsWeb/img/blog/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="pst-content">
                                                        <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                                    </div>
                                                </div>
                                                <!-- /single post -->
                                                <!-- single post -->
                                                <div class="recent-single-post">
                                                    <div class="post-img">
                                                        <a href="#">
                                                            <img src="assetsWeb/img/blog/4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="pst-content">
                                                        <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                                    </div>
                                                </div>
                                                <!-- /single post -->
                                            </div>
                                        </div>
                                        <!-- /Recent Post -->
                                    </div>
                                    <div class="single-blog-page">
                                        <!-- Menu Kategori -->
                                        <div class="left-blog">
                                            <h4>Categories</h4>
                                            <ul>
                                                <li>
                                                    <a href="#">Kategori-1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Kategori-2</a>
                                                </li>
                                                <li>
                                                    <a href="#">Kategori-3</a>
                                                </li>
                                                <li>
                                                    <a href="#">Kategori-4</a>
                                                </li>
                                                <li>
                                                    <a href="#">Kategori-5</a>
                                                </li>
                                            </ul>
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
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a href="blog-details.html">
                                                    <img src="assetsWeb/img/blog/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="comments-type">
                                                    <i class="bi bi-chat"></i>
                                                    <a href="#">11 comments</a>
                                                </span>
                                                <span class="date-type">
                                                    <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
                                                </span>
                                            </div>
                                            <div class="blog-text">
                                            <h4>
                                                <a href="#">Post my imagine Items</a>
                                            </h4>
                                            <p>
                                                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                                            </p>
                                            </div>
                                            <span>
                                                <a href="<?= base_url('website/Artikelweb/blog_detail')?>" class="ready-btn">Read more</a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /blog 1 detail -->
                                    <!-- blog 2 detail -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a href="blog-details.html">
                                                    <img src="assetsWeb/img/blog/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="comments-type">
                                                    <i class="bi bi-chat"></i>
                                                    <a href="#">11 comments</a>
                                                </span>
                                                <span class="date-type">
                                                    <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
                                                </span>
                                            </div>
                                            <div class="blog-text">
                                            <h4>
                                                <a href="#">Post my imagine Items</a>
                                            </h4>
                                            <p>
                                                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                                            </p>
                                            </div>
                                            <span>
                                                <a href="blog-details.html" class="ready-btn">Read more</a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /blog 2 detail -->
                                    <!-- blog 3 detail -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a href="blog-details.html">
                                                    <img src="assetsWeb/img/blog/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="comments-type">
                                                    <i class="bi bi-chat"></i>
                                                    <a href="#">11 comments</a>
                                                </span>
                                                <span class="date-type">
                                                    <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
                                                </span>
                                            </div>
                                            <div class="blog-text">
                                            <h4>
                                                <a href="#">Post my imagine Items</a>
                                            </h4>
                                            <p>
                                                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                                            </p>
                                            </div>
                                            <span>
                                                <a href="blog-details.html" class="ready-btn">Read more</a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /blog 3 detail -->
                                    <!-- blog 4 detail -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a href="blog-details.html">
                                                    <img src="assetsWeb/img/blog/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="comments-type">
                                                    <i class="bi bi-chat"></i>
                                                    <a href="#">11 comments</a>
                                                </span>
                                                <span class="date-type">
                                                    <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
                                                </span>
                                            </div>
                                            <div class="blog-text">
                                            <h4>
                                                <a href="#">Post my imagine Items</a>
                                            </h4>
                                            <p>
                                                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                                            </p>
                                            </div>
                                            <span>
                                                <a href="blog-details.html" class="ready-btn">Read more</a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /blog 4 detail -->
                                    <!-- blog 5 detail -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a href="blog-details.html">
                                                    <img src="assetsWeb/img/blog/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="comments-type">
                                                    <i class="bi bi-chat"></i>
                                                    <a href="#">11 comments</a>
                                                </span>
                                                <span class="date-type">
                                                    <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
                                                </span>
                                            </div>
                                            <div class="blog-text">
                                            <h4>
                                                <a href="#">Post my imagine Items</a>
                                            </h4>
                                            <p>
                                                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                                            </p>
                                            </div>
                                            <span>
                                                <a href="blog-details.html" class="ready-btn">Read more</a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /blog 5 detail -->
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