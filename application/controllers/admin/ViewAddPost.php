<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewAddPost extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
    }

    public function index()
    {
        $this->load->view('viewaddpost/index');
    }
}