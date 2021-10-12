<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Petugas_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('petugas/petugas_data', $data);
            
    }

    //View Tampilan Add Petugas
    public function viewAddPetugas(){
        $this->load->view('petugas/petugas_add');
    }

    //Add Kategori
    public function addPetugas(){
        $respon = array();
        $post = $this->input->post(null, TRUE);
        $data = $this->Petugas_m->addPetugas($post);
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

    //View Tampilan Edit Petugas
    public function viewEditPetugas($id){
        $data['dataPetugas'] = $this->Petugas_m->getById($id)->row();
        // echo json_encode($data);
        $this->load->view('petugas/petugas_edit',$data);
    }

    //Edit Petugas
    public function editPetugas(){
        $post = $this->input->post(null, TRUE);
        // echo json_encode($post);
        $data = $this->Petugas_m->editPetugas($post);
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

    // Delete Petugas
    public function deletePetugas($id){
        $this->Petugas_m->deletePetugas($id);
        
        redirect(base_url().'admin/Petugas');      
    }

}