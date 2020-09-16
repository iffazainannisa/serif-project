<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Birthday extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if (!isset($this->session->userdata['levelp'])){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
	}

	public function index(){
		$data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
		$data['title'] = 'Birthday';
		$data['tahun'] = $this->model_admin->getAllTahun();
		$this->load->view('templates\header_admin',$data);
        $this->load->view('templates\sidebar_anggota',$data);
		$this->load->view('menu\birthday_tahun',$data);
		$this->load->view('templates\footer_admin');
	}

	public function tampil($tahun){
        $data['anggota'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('usernamep')])->row_array();
        $data['title'] = 'Birthday';
        $data['tahun'] = $tahun;
        $data['jan'] = $this->model_admin->birthday(1,$tahun);
        $data['feb'] = $this->model_admin->birthday(2,$tahun);
        $data['mar'] = $this->model_admin->birthday(3,$tahun);
        $data['apr'] = $this->model_admin->birthday(4,$tahun);
        $data['mei'] = $this->model_admin->birthday(5,$tahun);
        $data['jun'] = $this->model_admin->birthday(6,$tahun);
        $data['jul'] = $this->model_admin->birthday(7,$tahun);
        $data['agu'] = $this->model_admin->birthday(8,$tahun);
        $data['sep'] = $this->model_admin->birthday(9,$tahun);
        $data['okt'] = $this->model_admin->birthday(10,$tahun);
        $data['nov'] = $this->model_admin->birthday(11,$tahun);
        $data['des'] = $this->model_admin->birthday(12,$tahun);
        $this->load->view('templates/header_admin', $data);
        $this->load->view('templates/sidebar_anggota', $data);
        $this->load->view('menu/birthday_list', $data);
        $this->load->view('templates/footer_admin');
    }
}