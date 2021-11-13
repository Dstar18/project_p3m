<?php

class Artikel_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->order_by('artikel_id', 'ASC');
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_artikel.artikel_petugas_id');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->where('artikel_id', $id);
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