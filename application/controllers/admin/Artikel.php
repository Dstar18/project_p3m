<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['Artikel_m', 'Kategori_m', 'Pengguna_m']);
        $this->load->library('form_validation');
    }

    // Index
    public function index(){
        $data['dataArtikel'] = $this->Artikel_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('artikel/artikel_data', $data);
    }

    public function cobaJoin(){
        $data['dataJoin'] = $this->Artikel_m->getAll()->result();
        echo json_encode($data);
    }

    // View Tampilan Add Artikel
    public function viewAddArtikel(){
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $this->load->view('artikel/artikel_add', $data);
    }

    // Add Artikel
    public function addArtikel(){
        $respon = array();
        $post = $this->input->post(null, TRUE);
        $data = $this->Artikel_m->addArtikel($post);
        if($data == TRUE){
           
            header("Location: index");
            
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        
        echo json_encode($respon);
        // echo json_encode($post);
    }

    // View Tampilan Edit Artikel
    public function viewEditArtikel(){
        $this->load->view('artikel/artikel_edit');
    }

    // Edit Artikel
    public function editArtikel(){
        // $this->load->view('artikel/artikel_data');
    }

    // Delete Artikel
    public function deleteArtikel(){
        $this->load->view('artikel/artikel_delete');
    }

    // View Tampilan Lihat Artikel
    public function viewLihatArtikel(){
        // $this->load->view('artikel/artikel_add');
    }
}