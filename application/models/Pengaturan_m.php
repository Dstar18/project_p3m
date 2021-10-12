<?php

class Pengaturan_m extends CI_Model{

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
            'pengaturan_nama' => $post['pengaturanNama'],
            'pengaturan_logo' => $post['pengaturanLogo'],
            'pengaturan_telp' => $post['pengaturanTelp'],
            'pengaturan_fb' => $post['pengaturanFb'],
            'pengaturan_ig' => $post['pengaturanIg'],
            'pengaturan_ytb' => $post['pengaturanYtb'],

        );
        $this->db->where('pengaturan_id', $post['pengaturanId']);
        $query = $this->db->update('tb_pengaturan', $parse);
        return $query;
    }
}