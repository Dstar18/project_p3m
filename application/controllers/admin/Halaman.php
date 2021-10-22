<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Halaman_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataHalaman'] = $this->Halaman_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('halaman/halaman_data', $data);  
    }

    //View Tampilan Edit Kategori
    public function viewEditHalaman($id){
        $data['dataHalaman'] = $this->Halaman_m->getById($id)->row();
        // echo json_encode($data);
        $this->load->view('halaman/halaman_edit',$data);
    }

    //Edit Kategori
    public function editHalaman(){
        $post = $this->input->post(null, TRUE);
        // echo json_encode($post);
        $data = $this->Halaman_m->editHalaman($post);
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