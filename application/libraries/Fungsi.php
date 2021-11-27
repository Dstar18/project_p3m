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
 
    function pengaturan_web(){
        $this->ci->load->model('Pengaturan_m');
        // $pengaturan_id = $this->ci->session->userdata('pengaturan_id');
        $pengaturan_data = $this->ci->Pengaturan_m->getAll()->row();
        return $pengaturan_data;
    
    }
}