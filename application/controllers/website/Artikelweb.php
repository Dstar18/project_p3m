<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikelweb extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    // Menampilkan dashboard blog
	// public function blog(){
	// 	$this->load->view('website/halaman/blog/blog');
	// }

    // Menampilkan blog-detail
	public function blog_detail(){
		$this->load->view('website/halaman/blog/blog_detail');
	}
  

}
