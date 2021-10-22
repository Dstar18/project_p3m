<?php

class Petugas_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $this->db->order_by('petugas_id', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $this->db->where('petugas_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function addPetugas($post){
        $parse = array(
            'petugas_NIP' => $post['petugasNIP'],
            'petugas_nama' => $post['petugasNama'],
            'petugas_email' => $post['petugasEmail'],
            'petugas_nohp' => $post['petugasNohp'],
            'petugas_password' => $post['petugasPassword'],
            'petugas_img_profil' => $post['petugasImgProfil'],
            'petugas_level' => $post['petugasLevel'],
        );
        $this->db->insert('tb_petugas', $parse);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editPetugas($post){
        $parse = array(
            'petugas_NIP' => $post['petugasNIP'],
            'petugas_nama' => $post['petugasNama'],
            'petugas_email' => $post['petugasEmail'],
            'petugas_nohp' => $post['petugasNohp'],
            'petugas_password' => $post['petugasPassword'],
            'petugas_img_profil' => $post['petugasImgProfil'],
            'petugas_level' => $post['petugasLevel'],

        );
        $this->db->where('petugas_id', $post['petugasId']);
        $query = $this->db->update('tb_petugas', $parse);
        return $query;
    }

    public function deletePetugas($id){
        $this->db->where('petugas_id', $id);
        $this->db->delete('tb_petugas');       
        // return $query;
    }
}