<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between">
    <div class="logo">
      <h1><a href="<?= base_url('Website/dashboard')?>"><span>P3M</span>ITDA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>
    
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="<?= base_url('Website/dashboard')?>">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="<?= base_url('Website/jurnal')?>">Jurnal</a></li>
        <li class="dropdown"><a href="#"><span>Puslitbang</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#portfolio">Blog</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url('admin/Auth/login')?>"><b>LOGIN</b></a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->