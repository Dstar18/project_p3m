<?php

class Artikel_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->order_by('artikel_id', 'ASC');
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
        $parse = array(
            'artikel_date' => $post['artikelDate'],
            // 'artikel_id' => $post['artikelId'],
            'artikel_judul' => $post['artikelJudul'],
            'artikel_content' => $post['artikelContent'],
            'petugas_id' => $post['petugasId'],
            'kategori_id' => $post['kategoriId'],
            'artikel_status' => $post['artikelStatus'],
        );
        $this->db->insert('tb_artikel', $parse);
        $id = $this->db->insert_id();
        return $id;
    }
}