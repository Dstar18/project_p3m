<?php

class PengumumanKategori_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pengumumankategori');
        $this->db->order_by('pgmkat_id', 'DESC');
        $this->db->join('tb_pengumuman','tb_pengumuman.pengumuman_id = tb_pengumumankategori.pgmkat_pengumuman_id');
        $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_pengumumankategori.pgmkat_kategori_id');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        // $this->db->select('*');
        $this->db->from('tb_pengumumankategori');
        $this->db->where('pgmkat_pengumuman_id', $id);
        $this->db->join('tb_pengumuman','tb_pengumuman.pengumuman_id = tb_pengumumankategori.pgmkat_pengumuman_id');
        $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_pengumumankategori.pgmkat_kategori_id');
        $query = $this->db->get();
        return $query;
    }

    public function getCountPengumumanKategori(){
        $this->db->select('COUNT(pgmkat_id) as total');
        $this->db->from('tb_pengumumankategori');
        $query = $this->db->get();
        return $query;
    }

    public function addPengumumanKategori($post){
        $parse = array(
            'pgmkat_pengumuman_id'  => $post['pengumumanID'],
            'pgmkat_kategori_id' => $post['kategoriId'], 
        );
        $query = $this->db->insert('tb_pengumumankategori', $parse);
        return $query;
    }

    public function editPengumumanKategori($post){
        $parse = array(
            'pgmkat_pengumuman_id'  => $post['pengumumanID'],
            'pgmkat_kategori_id' => $post['kategoriId'], 
        );
        $this->db->where('pgmkat_id', $post['pgmkatID']);
        $query = $this->db->update('tb_pengumumankategori', $parse);
        return $query;
    }

    public function deletePengumumanKategori($pengumumanID){
        $this->db->where('pgmkat_pengumuman_id', $pengumumanID);
        $this->db->delete('tb_pengumumankategori');
    }
}