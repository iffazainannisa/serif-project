<?php

class Proker extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!isset($this->session->userdata['levelp'])){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }

    public function index(){
        $data['title'] = 'Program Kerja';
        $data['anggota'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('usernamep')])->row_array();
        $data['tahun'] = $this->model_admin->getAllTahun();
        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_anggota', $data);
        $this->load->view('menu/proker_tahun', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tampil($tahun){
        $data['anggota'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('usernamep')])->row_array();
        $data['title'] = 'Program Kerja';
        $data['tahun'] = $this->model_admin->getAllTahun();
        $data['thn'] = $tahun;
        $data['divisi'] =$this->model_admin->get_divisi();
        $data['proker'] = $this->model_admin->tampil_data($tahun)->result();
        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_anggota', $data);
        $this->load->view('menu/daftar_proker', $data);
        $this->load->view('templates/footer_admin');
    }
    
}
