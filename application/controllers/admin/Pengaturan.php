<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        check_petugas();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Pengaturan_m');
        $this->load->library('form_validation','fungsi');
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
        if (!empty($_FILES["pengaturan_logo"]["name"])){
            $file = $this->uploadImage();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $pengaturan_logo = $file['name'];
                }
            } else {
                $response = array(
                    'status' 	    => 'error-upload',
                    'quoFile'       => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else {
            $pengaturan_logo = $post['pengaturan_logo_old'];
        }
        $parse = array(
            'pengaturan_id'     => $post['pengaturan_id'],
            'pengaturan_nama'   => $post['pengaturan_nama'],
            'pengaturan_logo'   => $pengaturan_logo,
            'pengaturan_telp'   => $post['pengaturan_telp'],
            'pengaturan_fb'     => $post['pengaturan_fb'],
            'pengaturan_ig'     => $post['pengaturan_ig'],
            'pengaturan_ytb'    => $post['pengaturan_ytb'],

        );
        $this->Pengaturan_m->editPengaturan($parse);
        if($this->db->affected_rows()>0){
            $response = array(
                'status'    => 'success',
            );
        }
        echo json_encode($response);
        redirect(base_url().'admin/Pengaturan');
    }

    // Upload File
    public function uploadImage(){
        $config['upload_path']     = FCPATH.'upload/imglogo/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg|image';
        $config['max_size']        = 5048;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['file_name']       = 'logo-'.date('ymd').'-'.substr(md5(rand()),0,10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!empty($_FILES['pengaturan_logo']['name']) != null){
            if($this->upload->do_upload('pengaturan_logo')){
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