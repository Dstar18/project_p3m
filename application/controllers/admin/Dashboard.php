<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['ArtikelKategori_m', 'Kategori_m', 'Petugas_m']);
    }

    public function index()
    {
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getCountArtikelKategori()->row();
        $data['dataKategori'] = $this->Kategori_m->getCountKategori()->row();
        $data['dataPetugas'] = $this->Petugas_m->getCountPetugas()->row();

        $this->load->view('dashboard/dashboard', $data);
            
    }
}