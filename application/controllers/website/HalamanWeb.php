<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanWeb extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Halaman_m');
        $this->load->library('form_validation');
    }

    //////////////Front-End Website////////////////////////
    public function WebVisiMisi(){
        $data['dataHalaman'] = $this->Halaman_m->getById('1')->row();
        $this->load->view('website/halaman/visimisi', $data);  
    }
    public function WebStrukturOrganisasi(){
        $data['dataHalaman'] = $this->Halaman_m->getById('2')->row();
        $this->load->view('website/halaman/strukturorganisasi', $data);  
    }
}