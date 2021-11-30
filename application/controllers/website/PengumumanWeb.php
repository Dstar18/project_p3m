<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengumumanWeb extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(['PengumumanKategori_m', 'Pengumuman_m', 'Kategori_m', 'Petugas_m']);
        $this->load->library('form_validation');
    }

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
        $data['dataPengumumanKategori'] = $this->PengumumanKategori_m->getById($id)->result();
        $data['dataPengumuman'] = $this->Pengumuman_m->getById($id)->row();
        // echo json_encode($data);
		$this->load->view('website/pengumuman/pengumuman_detail',$data);
	}

}
