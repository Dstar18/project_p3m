<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengumumanKategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        
        $this->load->model(['PengumumanKategori_m', 'Pengumuman_m', 'Kategori_m', 'Petugas_m']);
        $this->load->library('form_validation');
    }

    ///////////////////////Tampilan Back-end Admin//////////////////////

    // Index
    public function index(){
        $data['dataPengumumanKategori'] = $this->PengumumanKategori_m->getAll()->result();
        $data['dataPengumuman'] = $this->Pengumuman_m->getAll()->result();
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('PengumumanKategori/pengumumankategori_data', $data);
    }

    // View Tampilan Add Pengumuman
    public function viewAddPengumumanKategori(){
        $data['dataPengumumanKategori'] = $this->PengumumanKategori_m->getAll()->result();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('PengumumanKategori/pengumumankategori_add', $data);
    }

    // View Tampilan View Pengumuman
    public function viewViewPengumumanKategori($id){
        $data['dataPengumumanKategori'] = $this->PengumumanKategori_m->getById($id)->result();
        $data['dataPengumuman'] = $this->Pengumuman_m->getById($id)->row();
        $this->load->view('PengumumanKategori/pengumumankategori_view', $data);
    }

    // View Tampilan Edit Pengumuman
    public function viewEditPengumumanKategori($id){
        $data['dataPengumumanKategori'] = $this->PengumumanKategori_m->getById($id)->result();
        $data['dataPengumuman'] = $this->Pengumuman_m->getById($id)->row();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $this->load->view('PengumumanKategori/pengumumankategori_edit', $data);
    }

    ///////////////////////End Tampilan Back-end Admin//////////////////////


    ///////////////////////Tampilan Front-end Website//////////////////////

    // Menampilkan dashboard blog
    public function pengumuman(){
        $data['dataPengumumanKategori'] = $this->PengumumanKategori_m->getAll()->result();
        $data['dataPengumuman'] = $this->Pengumuman_m->getAllPublish()->result();
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
		$this->load->view('website/pengumuman/pengumuman',$data);
	}

    public function pengumuman_detail($id){
        $data['dataPengumuman'] = $this->Pengumuman_m->getById($id)->row();
        // echo json_encode($data);
		$this->load->view('website/pengumuman/pengumuman_detail',$data);
	}

    ///////////////////////End Tampilan Front-end Website//////////////////////
    
}