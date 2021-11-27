<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model('Kategori_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('kategori/kategori_data', $data);  
    }

    //View Tampilan Add Kategori
    public function viewAddKategori(){
        $this->load->view('kategori/kategori_add');
    }

    //Add Kategori
    public function addKategori(){
        $respon = array();
        $post = $this->input->post(null, TRUE);
        $data = $this->Kategori_m->addKategori($post);
        if($data == TRUE){
           
            header("Location: index");
            // $respon = array(
            //     'status' => 'succes'
            // ); 
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        
        echo json_encode($respon);
        // echo json_encode($post);
    }

    //View Tampilan Edit Kategori
    public function viewEditKategori($id){
        $data['dataKategori'] = $this->Kategori_m->getById($id)->row();
        // echo json_encode($data);
        $this->load->view('kategori/kategori_edit',$data);
    }

    //Edit Kategori
    public function editKategori(){
        $post = $this->input->post(null, TRUE);
        // echo json_encode($post);
        $data = $this->Kategori_m->editKategori($post);
        if($data == TRUE){
           
            header("Location: index");
            // $respon = array(
            //     'status' => 'succes'
            // ); 
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
    }

    // Delete Kategori
    public function deleteKategori($id){
        $this->Kategori_m->deleteKategori($id);
        
        redirect(base_url().'admin/Kategori');      
    }

}