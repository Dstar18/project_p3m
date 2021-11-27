<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        check_petugas();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Petugas_m');
        $this->load->library('form_validation');
    }

    //Index
    public function coba1(){
        $datax['cek'] = chmod("./upload/imgsampul/", 0777);
        echo json_encode($datax);
            
    }

    public function index(){
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('petugas/petugas_data', $data);
            
    }

    //View Tampilan Add Petugas
    public function viewAddPetugas(){
        $this->load->view('petugas/petugas_add');
    }

    // Add Petugas
    public function addPetugas(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["petugas_img_profil"]["name"])) {
            $file = $this->uploadImage();
            $datax['xempty'] = $file; 
            if($file['status'] == true){
                if($file['name'] != null){
                    $petugas_img_profil = $file['name']; 
                } 
            } else{
                $response = array(
                    'status' 	    => 'error-upload',
                    'quoFile'       => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else{
            $petugas_img_profil = $post['foto_old'];
        }
        $parse = array(
            'petugas_NIP'           => $post['petugas_NIP'],
            'petugas_nama'          => $post['petugas_nama'],
            'petugas_email'         => $post['petugas_email'],
            'petugas_nohp'          => $post['petugas_nohp'],
            'petugas_password'      => $post['petugas_password'],
            'petugas_img_profil'    => $petugas_img_profil,
            'petugas_level'         => $post['petugas_level'],
        );
        
        $this->Petugas_m->addPetugas($parse);
        if($this->db->affected_rows()>0){
            $response = array(
                'status'    => 'success',
            );
        }
        echo json_encode($response);
        redirect(base_url().'admin/Petugas');
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
        if (!empty($_FILES["petugas_img_profil"]["name"])) {
            $file = $this->uploadImage();
            $datax['xempty'] = $file; 
            if($file['status'] == true){
                if($file['name'] != null){
                    $petugas_img_profil = $file['name']; 
                } 
            } else{
                $response = array(
                    'status' 	    => 'error-upload',
                    'quoFile'       => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else {
            $petugas_img_profil = $post['petugas_img_profil_old'];
        }
        $parse = array(
            'petugas_id'            => $post['petugas_id'],
            'petugas_NIP'           => $post['petugas_NIP'],
            'petugas_nama'          => $post['petugas_nama'],
            'petugas_email'         => $post['petugas_email'],
            'petugas_nohp'          => $post['petugas_nohp'],
            'petugas_password'      => $post['petugas_password'],
            'petugas_img_profil'    => $petugas_img_profil,
            'petugas_level'         => $post['petugas_level'],
        );
        $this->Petugas_m->editPetugas($parse);
        if($this->db->affected_rows()>0){
            $response = array(
                'status'    => 'success',
            );
        }
        echo json_encode($response);
        redirect(base_url().'admin/Petugas');

    }

    // Delete Petugas
    public function deletePetugas($id){
        $this->Petugas_m->deletePetugas($id);
        
        redirect(base_url().'admin/Petugas');      
    }

    // Upload File
    public function uploadImage(){
        $config['upload_path']     = FCPATH.'upload/imgpetugas/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg|image';
        $config['max_size']        = 5000;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['file_name']       = 'imgprofil-'.date('ymd').'-'.substr(md5(rand()),0,10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!empty($_FILES['petugas_img_profil']['name']) != null){
            if($this->upload->do_upload('petugas_img_profil')){
                $file_name = $this->upload->data('file_name');
                $data['name'] = $file_name;
                $data['status'] = TRUE;
                return $data;
            }else{
                $data['status'] = FALSE;
                $data['error'] = "data tidak masuk";
                return $data;
            }
        }else{
            $data['status'] = TRUE;
            $data['name'] = null;
            return $data;
        }

    }

}