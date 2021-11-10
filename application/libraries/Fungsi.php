<?php

Class Fungsi{
    protected $ci;
    var $pengirim;
    var $subbidangID;

    function __construct(){
        $this->ci =& get_instance();
    }

    function petugas_login(){
        $this->ci->load->model('Petugas_m');
        $petugas_id = $this->ci->session->userdata('petugas_id');
        $petugas_data = $this->ci->Petugas_m->getById($petugas_id)->row();
        return $petugas_data;
    }
}