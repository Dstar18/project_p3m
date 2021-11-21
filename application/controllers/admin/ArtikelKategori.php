<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelKategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['ArtikelKategori_m', 'Artikel_m', 'Kategori_m', 'Petugas_m']);
        $this->load->library('form_validation');
    }

    // Index
    public function index(){
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getAll()->result();
        $data['dataArtikel'] = $this->Artikel_m->getAll()->result();
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('ArtikelKategori/artikelkategori_data', $data);
    }

    // View Tampilan Add Artikel
    public function viewAddArtikelKategori(){
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getAll()->result();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('ArtikelKategori/artikelkategori_add', $data);
    }

    // View Tampilan View Artikel
    public function viewViewArtikelKategori($id){
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getById($id)->row();
        $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        // $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $data['dataKategori'] = $this->Kategori_m->getById($id)->row();
        $this->load->view('ArtikelKategori/artikelkategori_view', $data);
    }

    // View Tampilan Edit Artikel
    public function viewEditArtikelKategori($id){
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getById($id)->row();
        $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        $data['dataKategori'] = $this->Kategori_m->getById($id)->row();
        $this->load->view('ArtikelKategori/artikelkategori_edit', $data);
    }

    
}