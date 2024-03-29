<?php

class ArtikelKategori_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_artikelkategori');
        $this->db->order_by('arkat_id', 'DESC');
        $this->db->join('tb_artikel','tb_artikel.artikel_id = tb_artikelkategori.arkat_artikel_id');
        $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_artikelkategori.arkat_kategori_id');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        // $this->db->select('*');
        $this->db->from('tb_artikelkategori');
        $this->db->where('arkat_artikel_id', $id);
        $this->db->join('tb_artikel','tb_artikel.artikel_id = tb_artikelkategori.arkat_artikel_id');
        $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_artikelkategori.arkat_kategori_id');
        $query = $this->db->get();
        return $query;
    }

    public function getCountArtikelKategori(){
        $this->db->select('COUNT(arkat_id) as total');
        $this->db->from('tb_artikelkategori');
        $query = $this->db->get();
        return $query;
    }

    public function addArtikelKategori($post){
        $parse = array(
            'arkat_artikel_id'  => $post['artikelID'],
            'arkat_kategori_id' => $post['kategoriId'], 
        );
        $query = $this->db->insert('tb_artikelkategori', $parse);
        return $query;
    }

    public function editArtikelKategori($post){
        $parse = array(
            'arkat_artikel_id'  => $post['artikelID'],
            'arkat_kategori_id' => $post['kategoriId'], 
        );
        $this->db->where('arkat_id', $post['arkatID']);
        $query = $this->db->update('tb_artikelkategori', $parse);
        return $query;
    }

    public function deleteArtikelKategori($artikelID){
        $this->db->where('arkat_artikel_id', $artikelID);
        $this->db->delete('tb_artikelkategori');
    }

    // public function deleteArtikelKategori($post){
    //     $this->db->where('arkat_artikel_id', $post['artikel_id']);
    //     $this->db->where('arkat_kategori_id', $post['arKat']);
    //     $this->db->delete('tb_artikelkategori');
    // }

    
}