<?php

class ArtikelKategori_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_artikelkategori');
        $this->db->order_by('arkat_id', 'ASC');
        $this->db->join('tb_artikel','tb_artikel.artikel_id = tb_artikelkategori.arkat_artikel_id');
        $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_artikelkategori.arkat_kategori_id');
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_artikelkategori.arkat_petugas_id');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_artikelkategori');
        $this->db->where('arkat_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function addArtikelKategori($post){
        $parse = array(
            'artikel_date_insert' => $post['artikelDateInsert'],
            'artikel_date_update' => $post['artikelDateUpdate'],
            'arkat_petugas_id' => $post['arkatPetugasId'],
            'artikel_judul' => $post['artikelJudul'],
            'artikel_content' => $post['artikelContent'],
            'artikel_sampul' => $post['artikelSampul'],
            'kategori_nama' => $post['kategoriNama'],
            'artikel_status' => $post['artikelStatus'],
        );
        $this->db->insert('tb_artikelkategori', $parse);
        $id = $this->db->insert_id();
        return $id;
    }
}