<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    
    // View Tampilan login
    public function login(){
        check_already_login_petugas();
        $this->load->view('login/login');
    }

    // Proses Auth Login
    public function process(){
        $post = $this->input->post(null, TRUE);
        // echo json_encode($post);
        
        if(isset($post['login'])){
            $this->load->model('Petugas_m');
            $query = $this->Petugas_m->login($post);

            if($query->num_rows()>0){
                $row = $query->row();
                $params = array(
                    'petugas_id' => $row->petugas_id,
                );
                $this->session->set_userdata($params);
                echo "<script>
                        alert('Selamat, Login Berhasil');
                        window.location='".site_url('admin/Dashboard')."';
                    </script>";
            } else {
                echo "<script>
                        alert('Maaf, Login Gagal');
                        window.location='".site_url('admin/Auth/login')."';
                    </script>";
            }
        }
    }
    
    // Logout
    public function logout(){
        $params = array('petugas_id');
        $this->session->unset_userdata($params);
        redirect('admin/Auth/login');
    }
}