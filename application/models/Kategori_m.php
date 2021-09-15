<?php

class Kategori_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->order_by('kategori_id', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->where('kategori_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function addKategori($post){
        $parse = array(
            'kategori_nama' => $post['kategoriNama'],
        );
        $this->db->insert('tb_kategori', $parse);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editKategori($post){
        $parse = array(
            'kategori_nama' => $post['kategoriNama'],

        );
        $this->db->where('kategori_id', $post['kategoriId']);
        $query = $this->db->update('tb_kategori', $parse);
        return $query;
    }

    public function deleteKategori($id){
        $this->db->where('kategori_id', $id);
        $this->db->delete('tb_kategori');       
        // return $query;
    }

}