<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if (!isset($this->session->userdata['levelp'])){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert dismissible fade show" role="alert">Anda Belum Login<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
	}

	public function index(){
		$data['title'] = 'Home';
		$data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
		$data['count_data']=$this->model_home->countData();
		$this->load->view('templates\header_admin',$data);
        $this->load->view('templates\sidebar_anggota',$data);
		$this->load->view('menu\dashboard',$data);
		$this->load->view('templates\footer_admin');
	}

	public function edit_profile($nim){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
		$data['title'] = 'Edit Profile';
		$data['mhs'] = $this->model_admin->tampil_datauser($nim)->row();
		$this->load->view('templates\header_admin',$data);
	    $this->load->view('templates\sidebar_anggota',$data);
		$this->load->view('menu\edit_profile',$data);
		$this->load->view('templates\footer_admin');
	}

	public function update(){
        //rules
        $this->form_validation->set_rules('inputnama','Nama', 'required|trim');
        $this->form_validation->set_rules('inputalmt','Alamat', 'trim');

        $nim = $this->input->post('inputnim');

        if($this->form_validation->run()== FALSE){
            $this->edit_profile($nim);
        }else{
            $nama = $this->input->post('inputnama');
            $tgl_lahir = $this->input->post('inputtgl');
            $bulan = date('m', strtotime($tgl_lahir));
            $alamat = $this->input->post('inputalmt');
            $telepon = $this->input->post('inputtlp');
            $email = $this->input->post('inputemail');

            $data = array (
                'nim' => $nim,
                'nama' => $nama,
                'tgl_lahir' => $tgl_lahir,
                'bulan_lahir' => $bulan,
                'alamat' => $alamat,
                'telepon' => $telepon,
                'email' => $email,
            );

            $where = array('nim' => $nim);
            $this->model_admin->update_data($where, $data, 'anggota');
            $this->session->set_flashdata('message','<div class="alert alert-success alert dismissible fade show" role="alert">Profil Berhasil Di Update<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('member/home/edit_profile/'.$nim);
        }
    }

    public function update2(){
        $nim = $this->input->post('Nimku');
    	$foto = $_FILES['foto'];
        if($foto==''){
        	//no action
        }else{
        	$config['upload_path'] = './assets/img/profile';
        	$config['allowed_types'] = 'jpg|png|jpeg';
        	$config['max_size'] = 1024 * 8 ;
            $config['file_name'] = $nim;

        	$this->load->library('upload',$config);
        	if (!$this->upload->do_upload('foto')) { //gagal
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert dismissible fade show" role="alert">Gagal Upload Foto</div>'); redirect('member/home/edit_profile/'.$nim);
			die();
        	}else{
        		$foto=$this->upload->data('file_name');
        	}
        }

        $data=array(
        	'foto' => $foto
        );

        $where = array('nim' => $nim);
        $this->model_admin->update_data($where, $data, 'anggota');
        redirect('member/home/edit_profile/'.$nim);
    }

    public function lihat_pengurus($nim){
        $data['anggota'] = $this->db->get_where('anggota',['username' => $this->session->userdata('usernamep')])->row_array();
		$data['title'] = 'Edit Profile';
		$data['mahasiswa'] = $this->model_admin->tampil_pengurususer($nim)->result();
		$data['divisi'] =$this->model_admin->get_divisi();
        $data['jabatan'] =$this->model_admin->get_jabatan();
        $data['hitung'] = count($this->model_admin->count_pengurus($nim));
		$this->load->view('templates\header_admin',$data);
	    $this->load->view('templates\sidebar_anggota',$data);
		$this->load->view('menu\edit_pengurus',$data);
		$this->load->view('templates\footer_admin');
	}

    public function tambah()
    {
        $nim = $this->input->post('nimku');
        $thn = $this->input->post('tahun');
        $div = $this->input->post('divisi');
        $jab = $this->input->post('jabatan');
        $pj = $this->input->post('pj');
       
        $data = array(
            'nim' => $nim,
            'tahun' => $thn,
            'divisi' => $div,
            'jabatan' => $jab,
            'penanggung_jawab' => $pj
        );

        $this->model_admin->tambah_kepengurusan($data, 'pengurus');
         $this->session->set_flashdata('message','<div class="alert alert-success alert dismissible fade show" role="alert">Data Kepengurusan Berhasil Di Tambahkan<button type="button" class="close" data-dismiss="alert" aria=label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('member/home/lihat_pengurus/'.$nim);
    }
}
?>