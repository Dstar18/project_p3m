<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        
        $this->load->model(['Artikel_m', 'Petugas_m', 'ArtikelKategori_m']);
        $this->load->library('form_validation');
    }

    // Index
    // public function index(){
    //     $data['dataArtikel'] = $this->Artikel_m->getAll()->result();
    //     // echo json_encode($data);
    //     $this->load->view('artikel/artikel_data', $data);
    // }

    //Add Artikel
    public function addArtikel(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["artikel_sampul"]["name"])) {
            $file = $this->uploadImage();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $artikel_sampul = $file['name'];
                }
            } else{
                $response = array(
                    'status' 	    => 'error-upload',
                    'quoFile'       => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else {
            $artikel_sampul = $post['artikel_sampul_old'];
        }
        $parse = array(
            'artikel_date_insert'   => $post['artikel_date_insert'],
            'artikel_date_update'   => $post['artikel_date_update'],
            'artikel_judul'         => $post['artikel_judul'],
            'artikel_sampul'        => $artikel_sampul,
            'artikel_content'       => $post['artikel_content'],
            'artikel_status'        => $post['artikel_status'],
            'artikel_petugas_id'    => $post['artikel_petugas_id'],
        );

        $id = $this->Artikel_m->addArtikel($parse);
        if($this->db->affected_rows()>0){
            for($i=0;$i<count($post['arkatKategoriId']); $i++){
                $parseArtikelKategori = array(
                    'artikelID'   => $id,
                    'kategoriId'   => $post['arkatKategoriId'][$i],
                );      
                $this->ArtikelKategori_m->addArtikelKategori($parseArtikelKategori);
                if($this->db->affected_rows()>0){                    
                    $response = array(
                        'status'    => 'success',
                    );
                }
            }

        }
        echo json_encode($response);
        redirect(base_url().'admin/ArtikelKategori');
    }

    // Edit Artikel
    public function editArtikel(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["artikel_sampul"]["name"])) {
            $file = $this->uploadImage();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $artikel_sampul = $file['name'];
                }
            } else{
                $response = array(
                    'status' 	    => 'error-upload',
                    'quoFile'       => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else {
            $artikel_sampul = $post['artikel_sampul_old'];
        }
        $parse = array(
            'artikel_id'            => $post['artikel_id'],
            'artikel_date_insert'   => $post['artikel_date_insert'],
            'artikel_date_update'   => $post['artikel_date_update'],
            'artikel_judul'         => $post['artikel_judul'],
            'artikel_sampul'        => $artikel_sampul,
            'artikel_content'       => $post['artikel_content'],
            'artikel_status'        => $post['artikel_status'],
            'artikel_petugas_id'    => $post['artikel_petugas_id'],
        );
        $id = $post['artikel_id'];
        $this->Artikel_m->editArtikel($parse);
        if($this->db->affected_rows()>0){
            $this->ArtikelKategori_m->deleteArtikelKategori($id);
            for($i=0;$i<count($post['arkatKategoriId']); $i++){
                $parseArtikelKategori = array(
                    'artikelID'   => $id,
                    'kategoriId'   => $post['arkatKategoriId'][$i],
                );      
                $this->ArtikelKategori_m->addArtikelKategori($parseArtikelKategori);
                if($this->db->affected_rows()>0){                    
                    $response = array(
                        'status'    => 'success',
                    );
                }
            }
        }
        // echo json_encode($response);
        redirect(base_url().'admin/ArtikelKategori');
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
        if(!empty($_FILES['artikel_sampul']['name']) != null){
            if($this->upload->do_upload('artikel_sampul')){
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

    // Delete Artikel
    public function deleteArtikel($id){
        $this->Artikel_m->deleteArtikel($id);
        
        redirect(base_url().'admin/ArtikelKategori');      
    }
}