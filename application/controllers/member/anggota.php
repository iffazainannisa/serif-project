<?php 

class Anggota extends CI_Controller{
	public function __construct(){
		parent::__construct();
        if (!isset($this->session->userdata['levelp'])){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
	}

    public function index(){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
        $data['title'] = 'Pengurus';
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_anggota',$data);
        $this->load->view('menu/anggota');
        $this->load->view('templates/footer_admin');
    }

    public function ph($div){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
        $jabatan = $this->uri->segment(5);
        $data['title'] = 'Pengurus';
        $data['tahun'] = $this->model_admin->getAllTahun();
        $data['div'] = $this->db->get_where('divisi',['id_divisi' => $div])->row_array();
        $data['jabatan'] = $this->db->get_where('jabatan',['id_jabatan' => intval($jabatan)])->row_array();
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_anggota',$data);
        $this->load->view('menu/detail_ph', $data);
        $this->load->view('templates/footer_admin');
    }

    public function sekben($div){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
        $jabatan = $this->uri->segment(5);
        $jabatan2 = $this->uri->segment(6);
        $data['title'] = 'Pengurus';
        $data['tahun'] = $this->model_admin->getAllTahun();
        $data['div'] = $this->db->get_where('divisi',['id_divisi' => $div])->row_array();
        $data['jabatan'] = $this->db->get_where('jabatan',['id_jabatan' => intval($jabatan)])->row_array();
        $data['jabatan2'] = $this->db->get_where('jabatan',['id_jabatan' => intval($jabatan2)])->row_array();
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_anggota',$data);
        $this->load->view('menu/detail_sekben', $data);
        $this->load->view('templates/footer_admin');
    }

    public function divisi($div){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
        $data['title'] = 'Pengurus';
        $data['tahun'] = $this->model_admin->getAllTahun();
        $data['div'] = $this->db->get_where('divisi',['id_divisi' => $div])->row_array();
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_anggota',$data);
        $this->load->view('menu/detail_divisi', $data);
        $this->load->view('templates/footer_admin');
    }

	

	public function detail_divisi($tahun){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
        $div = $this->uri->segment(5);
        $data['title'] = 'Pengurus';
        $thn = $this->input->post('thn');
        $member = $this->model_admin->tampil_divisi($div,$tahun);
        $data['member'] = $member;
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_anggota',$data);
        $this->load->view('menu/anggota_tampil', $data);
        $this->load->view('templates/footer_admin');
		
	}

    public function detail_ph($tahun){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
        $jab = $this->uri->segment(5);
        $data['title'] = 'Pengurus';
        $this->load->model('MPengurus');
        $member = $this->model_admin->tampil_ph($jab,$tahun);
        $data['member'] = $member;
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_anggota',$data);
        $this->load->view('menu/anggota_tampil',$data);
        $this->load->view('templates/footer_admin');
        
    }

    public function detail_sekben($tahun){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
        $jab = $this->uri->segment(5);
        $jab2 = $this->uri->segment(6);
        $data['title'] = 'Pengurus';
        
        $member = $this->model_admin->tampil_sekben($jab,$jab2,$tahun);
        $data['member'] = $member;
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_anggota',$data);
        $this->load->view('menu/anggota_tampil',$data);
        $this->load->view('templates/footer_admin');
        
    }

    public function detail($nim){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
        $data['title'] = 'Pengurus';
        $tahun = $this->uri->segment(5);
        $member = $this->model_admin->detail_anggota($nim,$tahun)->row();
        $data['mbr'] = $member;
        $this->load->view('templates/header_admin',$data);
        $this->load->view('templates/sidebar_anggota',$data);
        $this->load->view('menu/anggota_detail', $data);
        $this->load->view('templates/footer_admin');
        
    }
} 

?>