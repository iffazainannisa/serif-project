<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_user extends CI_Controller {
	public function __construct(){
		parent::__construct();
		 if (!isset($this->session->userdata['level'])){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
	}

	public function index(){
		$data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'Kelola User Baru';
		$data['baru'] = $this->model_admin->user_baru()->result();
		$this->load->view('templates\header_admin',$data);
        $this->load->view('templates\sidebar_admin',$data);
		$this->load->view('menu\kelola_user',$data);
		$this->load->view('templates\footer_admin');
	}

	public function setuju($nim){
		$where = array('nim' => $nim);
		$this->model_admin->setujui($where, 'anggota');
		$this->session->set_flashdata('message','<div class="alert alert-success alert dismissible fade show" role="alert">User Telah disetujui<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/kelola_user');
	}

	public function batal($nim){
		$where = array('nim' => $nim);
		$this->model_admin->batalkan($where, 'anggota');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert dismissible fade show" role="alert">User telah dihapus<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/kelola_user');
	}
}