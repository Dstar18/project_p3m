<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->model();
        // $this->load->library('form_validation');
    }

    // View Tampilan login
    public function login(){
        $this->load->view('login/login');
    }
}