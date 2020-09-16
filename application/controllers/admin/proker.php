<?php

class Proker extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!isset($this->session->userdata['level'])){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }

    public function index(){
        $data['title'] = 'Program Kerja';
        $data['anggota'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('username')])->row_array();
        $data['tahun'] = $this->model_admin->getAllTahun();
        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('menu/proker_tahun', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tampil($tahun){
        $data['anggota'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Program Kerja';
        $data['tahun'] = $this->model_admin->getAllTahun();
        $data['thn'] = $tahun;
        $data['divisi'] =$this->model_admin->get_divisi();
        $data['proker'] = $this->model_admin->tampil_data($tahun)->result();
        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('menu/daftar_proker', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah(){
        $judul      = $this->input->post('judul');
        $divisi     = $this->input->post('divisi');
        $deskripsi  = $this->input->post('deskripsi');
        $tahun      = $this->input->post('tahun');
        
        $data = array(
            'nama_proker' => $judul,
            'divisi'      => $divisi,
            'deskripsi'   => $deskripsi,
            'tahun'       => $tahun,
        );

        $this->model_admin->tambah_proker($data, 'data_proker');
        $this->session->set_flashdata('message','<div class="alert alert-success alert dismissible fade show" role="alert">Proker berhasil ditambahkan<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/proker/tampil/'.$tahun);
    }

    public function edit($id_proker){
        $data['anggota'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Detail Proker';
        $where = array('id_proker' => $id_proker);
        $data['pr'] = $this->model_admin->tampil_proker($id_proker)->row();
        $data['divisi'] = $this->model_admin->get_divisi();
        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('menu/edit_proker', $data);
        $this->load->view('templates/footer_admin');
    }

    public function update(){
        $id_proker        = $this->input->post('id_proker');
        $nama_proker      = $this->input->post('nama_proker');
        $deskripsi        = $this->input->post('deskripsi');
        $divisi           = $this->input->post('divisi');
        $dokumentasi      = $_FILES['userfile']['name'];

         if($dokumentasi){
            $config['upload_path'] = './assets/doc/';
            $config['allowed_types'] = 'pdf';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('userfile')){
                $userfile = $this->upload->data('file_name');
                $this->db->set('dokumentasi', $userfile);
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert dismissible fade show" role="alert" aria=label="Close">Gagal Upload Dokumentasi</div>'); redirect('admin/proker/edit/'.$id_proker);
                die();
            }
        }

        $data = array(
            'nama_proker'          => $nama_proker,
            'deskripsi'            => $deskripsi,
            'divisi'               => $divisi,
        );
        $where = array(
            'id_proker'  => $id_proker
        );
        $this->model_admin->update_data($where, $data, 'data_proker');
        $this->session->set_flashdata('message','<div class="alert alert-success alert dismissible fade show" role="alert">Proker berhasil diupdate<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/proker/edit/'.$id_proker);
    }

    public function hapus($id_proker){
        $where = array('id_proker' => $id_proker);
        $tahun = $this->uri->segment(5);
        $this->model_admin->hapus_data($where, 'data_proker');
        $this->session->set_flashdata('message','<div class="alert alert-success alert dismissible fade show" role="alert">Proker berhasil dihapus<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/proker/tampil/'.$tahun);
    }

    
}
