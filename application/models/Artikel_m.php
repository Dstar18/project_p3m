<?php

class Artikel_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->order_by('artikel_id', 'ASC');
        $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_artikel.artikel_kategori_id');
        $this->db->join('tb_pengguna','tb_pengguna.pengguna_id = tb_artikel.artikel_petugas_id');
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

    public function jointable(){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_artikel.artikel_id');
        $query = $this->db->get();
        return $query;
    }

    public function addArtikel($post){
        $parse = array(
            'artikel_kategori_id' => $post['artikelkategoriId'],
            'artikel_petugas_id' => $post['artikelpetugasId'],
            'artikel_date_insert' => $post['artikelDateInsert'],
            'artikel_judul' => $post['artikelJudul'],
            'artikel_content' => $post['artikelContent'],
            'artikel_status' => $post['artikelStatus'],
            'artikel_date_update' => $post['artikelDateUpdate'],
            
        );
        $this->db->insert('tb_artikel', $parse);
        $id = $this->db->insert_id();
        return $id;
    }
    private function _uploadImage(){
        $config['upload__path'] = './upload/product';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->artikel_id;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('image')){
            return $this->upload->data("file_name");
        }
    }
}