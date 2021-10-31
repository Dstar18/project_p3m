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

    public function getCountPasien(){
        $this->db->select('COUNT(petugas_id) as total');
        $this->db->from('tb_petugas');
        $query = $this->db->get();
        return $query;
    }

    // public function addPetugas($data){
    //     $this->db->insert('tb_petugas',$data);
    // }

    public function addPetugas($post){
        $params = array(
            'petugas_NIP'           => $post['petugas_NIP'],
            'petugas_nama'          => $post['petugas_nama'],
            'petugas_email'         => $post['petugas_email'],
            'petugas_nohp'          => $post['petugas_nohp'],
            'petugas_password'      => $post['petugas_password'],
            'petugas_img_profil'    => $post['petugas_img_profil'],
            'petugas_level'         => $post['petugas_level'],
        );
        $query = $this->db->insert('tb_petugas', $params);
        return $query;
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