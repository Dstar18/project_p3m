<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    // Menampilkan halaman website
    public function jurnal(){
		$this->load->view('website/halaman/jurnal');
	}

    // Menampilkan dashboard website
	public function dashboard(){
		$this->load->view('website/dashboard');
	}


}
