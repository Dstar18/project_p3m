<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelWeb extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(['ArtikelKategori_m', 'Artikel_m', 'Kategori_m', 'Petugas_m']);
        $this->load->library('form_validation');
    }

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
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getById($id)->result();
        $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        // echo json_encode($data);
		$this->load->view('website/blog/blog_detail',$data);
	}

}
