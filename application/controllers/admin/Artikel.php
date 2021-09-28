<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['Artikel_m', 'Kategori_m', 'Pengguna_m']);
        $this->load->library('form_validation');
    }

    // Index
    public function index(){
        $data['dataArtikel'] = $this->Artikel_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('artikel/artikel_data', $data);
    }

    // public function cobaJoin(){
    //     $data['dataJoin'] = $this->Artikel_m->getAll()->result();
    //     echo json_encode($data);
    // }

    // View Tampilan Add Artikel
    public function viewAddArtikel(){
        $data['dataKategori'] = $this->Kategori_m->getAll()->result();
        $this->load->view('artikel/artikel_add', $data);
    }

    // Add Artikel
    public function addArtikel(){
        // $respon = array();
        $post = $this->input->post(null, TRUE);
        // $data = $this->Artikel_m->addArtikel($post);
        // if($data == TRUE){
           
        //     header("Location: index");
            
        // }else{
        //     $respon = array(
        //         'status' => 'gagal'
        //     );
        // }
        
        // echo json_encode($respon);
        // echo json_encode($post);

        ////////////////////////////
        if(!empty($_FILES["artikelImgName"]["name"])){
            $file = $this->uploadImage();
            if($file['status'] == true){
                if($file['name'] != null){
                    $artikelImgName = $file['name'];
                }
            } else{
                $response = array(
                    'status' => 'error-upload',
                    'quoFile' => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else {
            // $artikel_imgname = $post['foto_old'];
        }

        // Create ID //
        $parse = array(
            'artikel_kategori_id' => $post['artikelkategoriId'],
            'artikel_petugas_id' => $post['artikelpetugasId'],
            'artikel_date_insert' => $post['artikelDateInsert'],
            'artikel_judul' => $post['artikelJudul'],
            'artikel_content' => $post['artikelContent'],
            'artikel_status' => $post['artikelStatus'],
            'artikel_date_update' => $post['artikelDateUpdate'],
            'artikel_imgname' => $post['artikelImgName'],
        );

        // $this->Artikel_m->addArtikel($parse);
        // if($this->db->affected_rows()>0){
        //     $response = array(
        //         'status' => 'success',
        //     );
        // }
        // echo json_encode($response);
        echo json_encode($file);

    }

    // Upload file/gambar sampul
    public function uploadImage(){
        $config['upload_path']     = './upload/imgsampul/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']        = 1000;
        // $config['max_width']       = 1024;
        // $config['max_height']      = 768;
        $config['file_name']       = 'sampul-'.date('ymd').'-'.substr(md5(rand()),0,10);

        $this->load->library('upload', $config);
        $post = $this->input->post(null, TRUE);
        if(isset($_FILES['artikelImgName']['name']) !=null){
            if($this->upload->do_upload('artikelImgName')){
                $file_name = $this->upload->data('file_name');
                $data['name'] = $file_name;
                $data['status'] = TRUE;
                return $data;
            } else {
                $data['status'] = FALSE;
                $data['error'] = "Data tidak masuk";
                return $data;
            }
        } else{
            $data['status'] = TRUE;
            $data['name'] = null;
            return $data;
        }
    }

    // View Tampilan Edit Artikel
    public function viewEditArtikel($id){
        $data['dataArtikel'] = $this->Artikel_m->getById($id)->row();
        // echo json_encode($id);
        $this->load->view('artikel/artikel_edit');
    }

    // Edit Artikel
    public function editArtikel(){
        $post = $this->input->post(null, TRUE);
        echo json_encode($post);
        // $data = $this->Artikel_m->editArtikel($post);
        // if($data == TRUE){
           
        //     header("Location: index");
        //     // $respon = array(
        //     //     'status' => 'succes'
        //     // ); 
        // }else{
        //     $respon = array(
        //         'status' => 'gagal'
        //     );
        // }
    }

    // Delete Artikel
    public function deleteArtikel(){
        $this->load->view('artikel/artikel_delete');
    }

    // View Tampilan Lihat Artikel
    public function viewLihatArtikel(){
        // $this->load->view('artikel/artikel_add');
    }
}