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
        //Pagination
        $this->load->library('pagination');
        $config['base_url']     = site_url('website/ArtikelWeb/blog');
        $config['total_rows']   = $this->db->count_all('tb_artikel');
        $config['per_page']     = 4;
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
        $config["num_links"]    = floor($choice);
        
        $this->pagination->initialize($config);
        $data['page']           = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $data['dataArtikel'] = $this->Artikel_m->getAllPublish($config["per_page"], $data['page'])->result();
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getAll()->result();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
        
        $data ['pagination'] = $this->pagination->create_links();
		$this->load->view('website/blog/blog',$data);
	}

    public function blog_detail($id){
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getById($id)->result();
        $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        // echo json_encode($data);
		$this->load->view('website/blog/blog_detail',$data);
	}

}


