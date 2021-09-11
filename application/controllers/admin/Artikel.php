<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Artikel_m');
        $this->load->library('form_validation');
    }

    // Index
    public function index(){
        $data['dataArtikel'] = $this->Artikel_m->getAll()->result();
        echo json_encode($data);
        // $this->load->view('artikel/artikel_data', $data);
    }

    // View Tampilan Add Artikel
    public function viewAddArtikel(){
        $this->load->view('artikel/artikel_add');
    }

    // Add Artikel
    public function addArtikel(){
        
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