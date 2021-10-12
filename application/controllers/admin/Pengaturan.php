<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Pengaturan_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataPengaturan'] = $this->Pengaturan_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('pengaturan/pengaturan_data', $data);
            
    }

    //View Tampilan Edit Pengaturan
    public function viewEditPengaturan($id){
        $data['dataPengaturan'] = $this->Pengaturan_m->getById($id)->row();
        // echo json_encode($data);
        $this->load->view('pengaturan/pengaturan_edit',$data);
    }

    //Edit Pengaturan
    public function editPengaturan(){
        $post = $this->input->post(null, TRUE);
        // echo json_encode($post);
        $data = $this->Pengaturan_m->editPengaturan($post);
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
}