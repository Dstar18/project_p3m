<?php

class Pengaturan_m extends CI_Model{

    public function get($id = null){
        $this->db->from('tb_pengaturan');
        if($id != null){
            $this->db->where('pengaturan_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pengaturan');
        $this->db->order_by('pengaturan_id', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_pengaturan');
        $this->db->where('pengaturan_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function editPengaturan($post){
        $parse = array(
            'pengaturan_nama'   => $post['pengaturan_nama'],
            'pengaturan_logo'   => $post['pengaturan_logo'],
            'pengaturan_telp'   => $post['pengaturan_telp'],
            'pengaturan_fb'     => $post['pengaturan_fb'],
            'pengaturan_ig'     => $post['pengaturan_ig'],
            'pengaturan_ytb'    => $post['pengaturan_ytb'],

        );
        $this->db->where('pengaturan_id', $post['pengaturan_id']);
        $query = $this->db->update('tb_pengaturan', $parse);
        return $query;
    }
}