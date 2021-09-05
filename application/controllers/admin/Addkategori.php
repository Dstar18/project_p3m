<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addkategori extends CI_Controller{

    public function index()
    {
        $this->load->view('kategori/kategori_add');
            
    }
}