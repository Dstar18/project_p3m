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
        // echo json_encode($data);
        $this->load->view('ArtikelKategori/artikelkategori_data', $data);
    }

    // View Tampilan Add Artikel
    public function viewAddArtikelKategori($id){
        $data['dataArtikel'] = $this->Artikel_m->getAll()->result();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        $data['dataArtikelKategori'] = $this->ArtikelKategori_m->getArkatID($id)->result();
        // echo json_encode($data);
        $this->load->view('ArtikelKategori/artikelkategori_add', $data);
    }
    //Add Artikel
    public function addArtikelKategori(){
        $respon = array();
        $post = $this->input->post(null, TRUE);
        $data = $this->ArtikelKategori_m->addArtikelKategori($post);
        if($data == TRUE){
           
            header("Location: index");
            // $respon = array(
            //     'status' => 'succes'
            // ); 
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        
        echo json_encode($respon);
        // echo json_encode($post);
    }
}