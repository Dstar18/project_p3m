<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model(['ArtikelKategori_m','Artikel_m', 'Pengumuman_m', 'Kategori_m', 'Petugas_m']);
    }

    public function index()
    {
        $data['dataArtikel'] = $this->Artikel_m->getCountArtikel()->row();
        $data['dataPengumuman'] = $this->Pengumuman_m->getCountPengumuman()->row();
        $data['dataKategori'] = $this->Kategori_m->getCountKategori()->row();
        $data['dataPetugas'] = $this->Petugas_m->getCountPetugas()->row();

        $this->load->view('dashboard/dashboard', $data);
            
    }
}