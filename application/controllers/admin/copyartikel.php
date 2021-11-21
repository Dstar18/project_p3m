//Add Artikel
    public function addArtikel(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["artikel_sampul"]["name"])) {
            $file = $this->uploadImage();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $artikel_sampul = $file['name'];
                }
            } else{
                $response = array(
                    'status' 	    => 'error-upload',
                    'quoFile'       => 'tidak Bisa Upload File, Silahkan Di cek Kembali Filenya'
                );
            }
        } else {
            $artikel_sampul = $post['artikel_sampul_old'];
        }
        $parse = array(
            'artikel_date_insert'   => $post['artikel_date_insert'],
            'artikel_date_update'   => $post['artikel_date_update'],
            'artikel_judul'         => $post['artikel_judul'],
            'artikel_sampul'        => $artikel_sampul,
            'artikel_content'       => $post['artikel_content'],
            'artikel_status'        => $post['artikel_status'],
            'artikel_petugas_id'    => $post['artikel_petugas_id'],
        );

        $id = $this->Artikel_m->addArtikel($parse);
        if($this->db->affected_rows()>0){
            for($i=0;$i<count($post['arkatKategoriId']); $i++){
                $parseArtikelKategori = array(
                    'artikelID'   => $id,
                    'kategoriId'   => $post['arkatKategoriId'][$i],
                );      
                $this->ArtikelKategori_m->addArtikelKategori($parseArtikelKategori);
                if($this->db->affected_rows()>0){                    
                    $response = array(
                        'status'    => 'success',
                    );
                }
            }

        }
        echo json_encode($response);
        redirect(base_url().'admin/ArtikelKategori');
    }