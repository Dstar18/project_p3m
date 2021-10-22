<?php

class Halaman_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_halaman');
        $this->db->order_by('halaman_id', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_halaman');
        $this->db->where('halaman_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function editHalaman($post){
        $parse = array(
            'halaman_judul' => $post['halamanJudul'],
            'halaman_content' => $post['halamanContent'],

        );
        $this->db->where('halaman_id', $post['halamanId']);
        $query = $this->db->update('tb_halaman', $parse);
        return $query;
    }
}