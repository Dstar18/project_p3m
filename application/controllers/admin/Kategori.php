<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{

    public function index()
    {
        $this->load->view('kategori/kategori_data');
            
    }
}