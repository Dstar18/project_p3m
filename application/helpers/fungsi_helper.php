<?php

function check_already_login_petugas(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('petugas_id');
    if($user_session){
        // echo "Masuk";
        redirect('admin/Dashboard');
    }
}

function check_not_petugas(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('petugas_id');
    if(!$user_session){
        redirect('admin/Auth/login');
    }
}

// Hanya petugas level 1 (admin) yg dapat akses
//Level Petugas
function check_petugas(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->petugas_login()->petugas_level != 1){
        redirect('admin/Dashboard');
    }

}

// function check_petugas_page($idPage){
//     $ci =& get_instance();
//     $ci->load->library('fungsi');
//     $data = $ci->fungsi->hakAkses()->hakAksesPageRules;
//     $zx = unserialize($data);
//     if(!in_array($idPage, $zx)){
//          redirect('index');
       
//     } else{
       
//     }
// }