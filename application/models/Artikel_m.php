<?php

class Artikel_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->order_by('artikel_id', 'DESC');
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_artikel.artikel_petugas_id');
        $query = $this->db->get();
        return $query;
    }

    public function getAllPublish($limit, $start){
        $this->db->select('*');
        // $this->db->from('tb_artikel');
        $this->db->where('artikel_status', '1');
        $this->db->order_by('artikel_id', 'DESC');
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_artikel.artikel_petugas_id');
        $query = $this->db->get('tb_artikel', $limit, $start);
        return $query;
    }

    
    public function getAllLimit(){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->where('artikel_status', '1');
        $this->db->order_by('artikel_id', 'DESC');
        $this->db->limit(3);
        
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_artikel.artikel_petugas_id');
        
        $query = $this->db->get();
        return $query;
    }

    // public function getDataPagination($limit, $start){
    //     $this->db->select('*');
    //     $this->db->from('tb_artikel');
    //     $this->db->order_by('artikel_id', 'DESC');
    //     $this->db->limit($limit, $start);

    //     $query = $this->db->get();
    //     return $query;
    // }

    // public function getDataPagination($limit, $start){
    //     return $this->db->get('tb_artikel', $limit, $start)->result_array();
    // }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->where('artikel_id', $id);
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_artikel.artikel_petugas_id');
        $query = $this->db->get();
        return $query;
    }

    public function getCountArtikel(){
        $this->db->select('COUNT(artikel_id) as total');
        $this->db->from('tb_artikel');
        $query = $this->db->get();
        return $query;
    }

    public function addArtikel($post){
        $params = array(
            'artikel_date_insert'   => $post['artikel_date_insert'],
            'artikel_date_update'   => $post['artikel_date_update'],
            'artikel_judul'         => $post['artikel_judul'],
            'artikel_sampul'        => $post['artikel_sampul'],
            'artikel_content'       => $post['artikel_content'],
            'artikel_status'        => $post['artikel_status'],
            'artikel_petugas_id'    => $post['artikel_petugas_id'],         
        );
        $this->db->insert('tb_artikel', $params);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editArtikel($post){
        $parse = array(
            'artikel_date_insert'   => $post['artikel_date_insert'],
            'artikel_date_update'   => $post['artikel_date_update'],
            'artikel_judul'         => $post['artikel_judul'],
            'artikel_sampul'        => $post['artikel_sampul'],
            'artikel_content'       => $post['artikel_content'],
            'artikel_status'        => $post['artikel_status'],
            'artikel_petugas_id'    => $post['artikel_petugas_id'],
        );
        $this->db->where('artikel_id', $post['artikel_id']);
        $query = $this->db->update('tb_artikel', $parse);
        return $query;
    }

    public function deleteArtikel($id){
        $this->db->where('artikel_id', $id);
        $this->db->delete('tb_artikel');
    }
}