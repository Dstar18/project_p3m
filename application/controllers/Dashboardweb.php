<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardweb extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(['ArtikelKategori_m', 'Artikel_m', 'Kategori_m', 'Pengaturan_m', 'Petugas_m']);
        $this->load->library('form_validation');
    }

    // Menampilkan dashboard website
	public function dashboard(){
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getAll()->result();
        $data['dataArtikel'] = $this->Artikel_m->getAllLimit()->result();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        // $data['dataPengaturan'] = $this->Pengaturan_m->getAll()->result();
		$this->load->view('website/dashboard', $data);
	}

}
