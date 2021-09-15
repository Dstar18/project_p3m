<?php

class Petugas_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->order_by('pengguna_id', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where('pengguna_id', $id);
        $query = $this->db->get();
        return $query;
    }
}