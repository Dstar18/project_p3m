<?php

class Artikel_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->order_by('artikel_id', 'ASC');
        // $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_artikel.artikel_kategori_id');
        // $this->db->join('tb_pengguna','tb_pengguna.pengguna_id = tb_artikel.artikel_petugas_id');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->where('artikel_id', $id);
        // $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_artikel.artikel_kategori_id', $id);
        // $this->db->join('tb_pengguna','tb_pengguna.pengguna_id = tb_artikel.artikel_petugas_id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getCountPasien(){
        $this->db->select('COUNT(artikel_id) as total');
        $this->db->from('tb_artikel');
        $query = $this->db->get();
        return $query;
    }

    // public function jointable(){
    //     $this->db->select('*');
    //     $this->db->from('tb_artikel');
    //     $this->db->join('tb_kategori','tb_kategori.kategori_id = tb_artikel.artikel_id');
    //     $query = $this->db->get();
    //     return $query;
    // }

    // public function addArtikel($post){
    //     $params = array(
    //         'artikel_kategori_id' => $post['artikelkategoriId'],
    //         'artikel_petugas_id' => $post['artikelpetugasId'],
    //         'artikel_date_insert' => $post['artikelDateInsert'],
    //         'artikel_judul' => $post['artikelJudul'],
    //         'artikel_content' => $post['artikelContent'],
    //         'artikel_status' => $post['artikelStatus'],
    //         'artikel_date_update' => $post['artikelDateUpdate'],
    //         'artikel_imgname' => $post['artikelImgName'],         
    //     );
    //     // $this->image = $this->_uploadImage();
    //     $query = $this->db->insert('tb_artikel', $params);
    //     // $id = $this->db->insert_id();
    //     return $query;
    // }

    // public function _uploadImage(){
    //     $config['upload__path'] = './upload/imgsampul';
    //     $config['allowed_types'] = 'gif|jpg|png';
    //     $config['file_name'] = 'dataxxz';
    //     $config['overwrite'] = true;
    //     $config['max_size'] = 1024;
    //     // $config['max_width'] = 1024;
    //     // $config['max_height'] = 768;

    //     $this->load->library('upload', $config);
    //     if($this->upload->do_upload('artikelImgName')){
    //         return $this->upload->data("file_name");
    //     }
    // }

    // public function editArtikel($post){
    //     $parse = array(
    //         'artikel_kategori_id' => $post['artikelkategoriId'],
    //         'artikel_petugas_id' => $post['artikelpetugasId'],
    //         'artikel_date_insert' => $post['artikelDateInsert'],
    //         'artikel_judul' => $post['artikelJudul'],
    //         'artikel_content' => $post['artikelContent'],
    //         'artikel_status' => $post['artikelStatus'],
    //         'artikel_date_update' => $post['artikelDateUpdate'],
    //         'artikel_imgname' => $post['artikelImgName'],
    //     );
    //     $this->db->where('artikel_id', $post['artikelId']);
    //     $query = $this->db->update('tb_artikel', $parse);
    //     return $query;
    // }
}