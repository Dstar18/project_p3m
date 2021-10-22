<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    // Menampilkan dashboard website
	public function dashboard(){
		$this->load->view('website/dashboard');
	}

    // Menampilkan dashboard Blog
	public function blog(){
		$this->load->view('website/halaman/blog/blog');
	}


}
