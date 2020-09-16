<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if (!isset($this->session->userdata['levelb'])){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }

	public function index(){
		$dataa['title'] = 'Home';
		$data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernameb')])->row_array();
		$this->load->view('templates\header_admin',$dataa);
        $this->load->view('templates\sidebarbaru',$data);
		$this->load->view('baru/index',$data);
		$this->load->view('templates\footer_admin');
	}
}
?>