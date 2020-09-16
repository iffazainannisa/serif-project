<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if (!isset($this->session->userdata['levela'])){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
	}

	public function index(){
		$data['title'] = 'Home';
		$data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamea')])->row_array();
		$data['count_data']=$this->model_home->countData();
		$this->load->view('templates\header_admin',$data);
        $this->load->view('templates\sidebar_alumni',$data);
		$this->load->view('menu\dashboard',$data);
		$this->load->view('templates\footer_admin');
	}

    public function lihat_pengurus($nim){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamea')])->row_array();
		$data['title'] = 'Edit Profile';
		$data['mahasiswa'] = $this->model_admin->tampil_pengurususer($nim)->result();
		$data['divisi'] =$this->model_admin->get_divisi();
        $data['jabatan'] =$this->model_admin->get_jabatan();
        $data['hitung'] = count($this->model_admin->count_pengurus($nim));
		$this->load->view('templates\header_admin',$data);
	    $this->load->view('templates\sidebar_alumni',$data);
		$this->load->view('menu\edit_pengurus',$data);
		$this->load->view('templates\footer_admin');
	}
}
?>