<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        
        $this->load->model(['Pengumuman_m', 'Petugas_m', 'PengumumanKategori_m']);
        $this->load->library('form_validation');
    }

    //Add Pengumuman
    public function addPengumuman(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["pengumuman_sampul"]["name"])) {
            $file = $this->uploadImage();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $pengumuman_sampul = $file['name'];
                }
            } else{
                $response = array(
                    'status' 	    => 'error-upload',
                    'quoFile'       => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else {
            $pengumuman_sampul = $post['pengumuman_sampul_old'];
        }
        $parse = array(
            'pengumuman_date_insert'   => $post['pengumuman_date_insert'],
            'pengumuman_date_update'   => $post['pengumuman_date_update'],
            'pengumuman_judul'         => $post['pengumuman_judul'],
            'pengumuman_sampul'        => $pengumuman_sampul,
            'pengumuman_content'       => $post['pengumuman_content'],
            'pengumuman_status'        => $post['pengumuman_status'],
            'pengumuman_petugas_id'    => $post['pengumuman_petugas_id'],
        );

        $id = $this->Pengumuman_m->addPengumuman($parse);
        if($this->db->affected_rows()>0){
            for($i=0;$i<count($post['pgmkatKategoriId']); $i++){
                $parsePengumumanKategori = array(
                    'pengumumanID'   => $id,
                    'kategoriId'   => $post['pgmkatKategoriId'][$i],
                );      
                $this->PengumumanKategori_m->addPengumumanKategori($parsePengumumanKategori);
                if($this->db->affected_rows()>0){                    
                    $response = array(
                        'status'    => 'success',
                    );
                }
            }

        }
        echo json_encode($response);
        redirect(base_url().'admin/PengumumanKategori');
    }

    // Edit pengumuman
    public function editPengumuman(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["pengumuman_sampul"]["name"])) {
            $file = $this->uploadImage();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $pengumuman_sampul = $file['name'];
                }
            } else{
                $response = array(
                    'status' 	    => 'error-upload',
                    'quoFile'       => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else {
            $pengumuman_sampul = $post['pengumuman_sampul_old'];
        }
        $parse = array(
            'pengumuman_id'            => $post['pengumuman_id'],
            'pengumuman_date_insert'   => $post['pengumuman_date_insert'],
            'pengumuman_date_update'   => $post['pengumuman_date_update'],
            'pengumuman_judul'         => $post['pengumuman_judul'],
            'pengumuman_sampul'        => $pengumuman_sampul,
            'pengumuman_content'       => $post['pengumuman_content'],
            'pengumuman_status'        => $post['pengumuman_status'],
            'pengumuman_petugas_id'    => $post['pengumuman_petugas_id'],
        );
        $id = $post['pengumuman_id'];
        $this->Pengumuman_m->editPengumuman($parse);
        if($this->db->affected_rows()>0){
            $this->PengumumanKategori_m->deletePengumumanKategori($id);
            for($i=0;$i<count($post['pgmkatKategoriId']); $i++){
                $parsePengumumanKategori = array(
                    'pengumumanID'   => $id,
                    'kategoriId'   => $post['pgmkatKategoriId'][$i],
                );      
                $this->PengumumanKategori_m->addPengumumanKategori($parsePengumumanKategori);
                if($this->db->affected_rows()>0){                    
                    $response = array(
                        'status'    => 'success',
                    );
                }
            }
        }
        // echo json_encode($response);
        redirect(base_url().'admin/PengumumanKategori');
    }

    // Upload File
    public function uploadImage(){
        $config['upload_path']     = FCPATH.'upload/imgsampul/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg|image';
        $config['max_size']        = 5000;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['file_name']       = 'imgpsampul-'.date('ymd').'-'.substr(md5(rand()),0,10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!empty($_FILES['pengumuman_sampul']['name']) != null){
            if($this->upload->do_upload('pengumuman_sampul')){
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

    // Delete Pengumuman
    public function deletePengumuman($id){
        $this->Pengumuman_m->deletePengumuman($id);
        redirect(base_url().'admin/PengumumanKategori');      
    }
}