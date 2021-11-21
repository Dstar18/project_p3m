<?php

class Petugas_m extends CI_Model{

    public function get($id = null){
        $this->db->from('tb_petugas');
        if($id != null){
            $this->db->where('petugas_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getAllPetugas(){
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $query = $this->db->get();
        return $query;
    }

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

    public function login($post){
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $this->db->where('petugas_NIP', $post['NIP']);
        $this->db->where('petugas_password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function getMax(){
        $this->db->select_max('petugas_id');
        $this->db->from('tb_petugas');
        $query = $this->db->get();
        return $query;
    }

    public function getCountPetugas(){
        $this->db->select('COUNT(petugas_id) as total');
        $this->db->from('tb_petugas');
        $query = $this->db->get();
        return $query;
    }

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
            'petugas_NIP'           => $post['petugas_NIP'],
            'petugas_nama'          => $post['petugas_nama'],
            'petugas_email'         => $post['petugas_email'],
            'petugas_nohp'          => $post['petugas_nohp'],
            'petugas_password'      => $post['petugas_password'],
            'petugas_img_profil'    => $post['petugas_img_profil'],
            'petugas_level'         => $post['petugas_level'],

        );
        $this->db->where('petugas_id', $post['petugas_id']);
        $query = $this->db->update('tb_petugas', $parse);
        return $query;
    }

    public function deletePetugas($id){
        $this->db->where('petugas_id', $id);
        $this->db->delete('tb_petugas');       
        // return $query;
    }
}