<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between">
    <div class="logo">
      <h1><a href="<?= base_url('')?>"><img src="<?= base_url()?>upload/imglogo/<?=$this->fungsi->pengaturan_web()->pengaturan_logo?>" alt="" class="img-fluid"></a> 
      <!-- <h1><a href="<?= base_url('')?>"><span>LPPM</span>ITDA</a></h1> -->
      <a href="<?= base_url('')?>"><?=$this->fungsi->pengaturan_web()->pengaturan_nama?></a></h1>
    </div>
   
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link" href="<?= base_url('')?>">Beranda</a></li>

        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?= base_url('website/HalamanWeb/WebVisiMisi')?>">Visi & Misi</a></li>
            <li><a href="<?= base_url('website/HalamanWeb/WebStrukturOrganisasi')?>">Struktur Organisasi</a></li>
          </ul>
        </li>

        <li><a class="nav-link scrollto" href="<?= base_url('website/PengumumanWeb/pengumuman')?>">Pengumuman</a></li>

        <li><a class="nav-link scrollto" href="<?= base_url('website/ArtikelWeb/blog')?>">Blog</a></li>

        <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="https://ejournals.itda.ac.id/" target="_blank">Jurnal</a></li>
            <li><a href="https://senatik.itda.ac.id/index.php/senatik" target="_blank">Seminar Senatik</a></li>
          </ul>
        </li>
       
        <li class="dropdown"><a href="#"><span>Link Utama</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="http://simlitabmas.ristekdikti.go.id/" target="_blank">Simlitabmas</a></li>
            <li><a href="http://sinta.ristekdikti.go.id/" target="_blank">Sinta</a></li>
            <li><a href="http://itda.ac.id/" target="_blank">ITDA</a></li>
            <li><a href="https://perpustakaan.itda.ac.id/" target="_blank">Perpustakaan ITDA</a></li>
            <li><a href="http://eprints.stta.ac.id/" target="_blank">Repositori ITDA</a></li>
          </ul>
        </li>
        
        <li><a class="nav-link scrollto" href="<?= base_url('admin/Auth/login')?>"><b>LOGIN</b></a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->