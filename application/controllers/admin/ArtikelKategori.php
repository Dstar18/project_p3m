<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelKategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        
        $this->load->model(['ArtikelKategori_m', 'Artikel_m', 'Kategori_m', 'Petugas_m']);
        $this->load->library('form_validation');
    }

    ///////////////////////Tampilan Back-end Admin//////////////////////

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
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getById($id)->result();
        $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        // $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        // $data['dataKategori'] = $this->Kategori_m->getById($id)->row();
        // echo json_encode($data);
        $this->load->view('ArtikelKategori/artikelkategori_view', $data);
    }

    // View Tampilan Edit Artikel
    public function viewEditArtikelKategori($id){
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getById($id)->result();
        $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        // $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getById($id)->row();
        // $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        // $data['dataPetugas'] = $this->Petugas_m->getById($id)->row();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $this->load->view('ArtikelKategori/artikelkategori_edit', $data);
    }

    ///////////////////////End Tampilan Back-end Admin//////////////////////


    ///////////////////////Tampilan Front-end Website//////////////////////

    // Menampilkan dashboard blog
    public function blog(){
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getAll()->result();
        $data['dataArtikel'] = $this->Artikel_m->getAllPublish()->result();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
		$this->load->view('website/blog/blog',$data);
	}

    public function blog_detail($id){
        // $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getById()->result();
        $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        // $data['dataKategori'] = $this->Kategori_m->getById()->result();
        // $data['dataPetugas'] = $this->Petugas_m->getById()->result();
        // echo json_encode($data);
		$this->load->view('website/blog/blog_detail',$data);
	}

	// public function blog_sidebar(){
    //     $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getAll()->result();
    //     $data['dataArtikel'] = $this->Artikel_m->getAll()->result();
    //     $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
	// 	$this->load->view('_partialsWeb/sidebar',$data);
	// }

    ///////////////////////End Tampilan Front-end Website//////////////////////
    
}