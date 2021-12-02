<?php

class Pengumuman_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        $this->db->order_by('pengumuman_id', 'DESC');
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_pengumuman.pengumuman_petugas_id');
        $query = $this->db->get();
        return $query;
    }

    public function getAllPublish($limit, $start){
        $this->db->select('*');
        // $this->db->from('tb_pengumuman');
        $this->db->where('pengumuman_status', '1');
        $this->db->order_by('pengumuman_id', 'DESC');
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_pengumuman.pengumuman_petugas_id');
        $query = $this->db->get('tb_pengumuman', $limit, $start);
        return $query;
    }

    
    public function getAllLimit(){
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        $this->db->where('pengumuman_status', '1');
        $this->db->order_by('pengumuman_id', 'DESC');
        $this->db->limit(3);
        
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_pengumuman.pengumuman_petugas_id');
        
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        $this->db->where('pengumuman_id', $id);
        $this->db->join('tb_petugas','tb_petugas.petugas_id = tb_pengumuman.pengumuman_petugas_id');
        $query = $this->db->get();
        return $query;
    }

    public function getCountPengumuman(){
        $this->db->select('COUNT(pengumuman_id) as total');
        $this->db->from('tb_pengumuman');
        $query = $this->db->get();
        return $query;
    }

    public function addPengumuman($post){
        $params = array(
            'pengumuman_date_insert'   => $post['pengumuman_date_insert'],
            'pengumuman_date_update'   => $post['pengumuman_date_update'],
            'pengumuman_judul'         => $post['pengumuman_judul'],
            'pengumuman_sampul'        => $post['pengumuman_sampul'],
            'pengumuman_content'       => $post['pengumuman_content'],
            'pengumuman_status'        => $post['pengumuman_status'],
            'pengumuman_petugas_id'    => $post['pengumuman_petugas_id'],
        );
        $this->db->insert('tb_pengumuman', $params);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editPengumuman($post){
        $parse = array(
            'pengumuman_date_insert'   => $post['pengumuman_date_insert'],
            'pengumuman_date_update'   => $post['pengumuman_date_update'],
            'pengumuman_judul'         => $post['pengumuman_judul'],
            'pengumuman_sampul'        => $post['pengumuman_sampul'],
            'pengumuman_content'       => $post['pengumuman_content'],
            'pengumuman_status'        => $post['pengumuman_status'],
            'pengumuman_petugas_id'    => $post['pengumuman_petugas_id'],
        );
        $this->db->where('pengumuman_id', $post['pengumuman_id']);
        $query = $this->db->update('tb_pengumuman', $parse);
        return $query;
    }

    public function deletePengumuman($id){
        $this->db->where('pengumuman_id', $id);
        $this->db->delete('tb_pengumuman');
    }
}