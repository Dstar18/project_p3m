<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardweb extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(['ArtikelKategori_m', 'Artikel_m', 'PengumumanKategori_m', 'Pengumuman_m', 'Kategori_m']);
        $this->load->library('form_validation');
    }

    // Menampilkan dashboard website
	public function dashboard(){
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getAll()->result();
        $data['dataArtikel'] = $this->Artikel_m->getAllLimit()->result();
        $data['dataPengumumanKategori'] = $this->PengumumanKategori_m->getAll()->result();
        $data['dataPengumuman'] = $this->Pengumuman_m->getAllLimit()->result();

		$this->load->view('website/dashboard', $data);
	}

}
