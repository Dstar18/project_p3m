<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Petugas_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        echo json_encode($data);
        // $this->load->view('kategori/kategori_data', $data);
            
    }
}