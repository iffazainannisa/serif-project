<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){ //selalu dijalankan
		parent::__construct(); //memanggil method construct di CI controller
	}

	public function index(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false){
			$data['title'] = 'Login DBO';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		}else{
			//validasi benar
			$this->_login();
		}
		
	}

	public function registration(){
		$this->form_validation->set_rules('name','Name', 'required|trim'); //Name as; trim agar spasi tidak masalah
		$this->form_validation->set_rules('nim','Nim', 'required|trim|is_unique[anggota.nim]',
			[
			'is_unique' => "NIM is already registered"
			]
		);
		$this->form_validation->set_rules('username','Username', 'required|trim|min_length[5]|max_length[15]|is_unique[anggota.username]',
			[
			'is_unique' => "username is already registered"
			]
		);
		$this->form_validation->set_rules('password1', 'Password1', 'trim|required|min_length[6]', 
			[
			'required' => "Password is required",
			'matches' => "Password don't matches",
			'min_length' => "Password too short"
			]
		);
		$this->form_validation->set_rules('password2', 'Password2', 'trim|required|matches[password1]',
			[
			'required' => "Confirm Password is required",
			'matches' => "Password didn't matches"
			]
		);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'SERIF User registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		}
		//sukses
		else{
			$data = [
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('name'),
				'tgl_lahir' => "000-00-00",
				'alamat' => "-",
				'telepon' => "-",
				'email' => "-",
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password1')),
				'user_level' => 0,
				'foto' => 'nofoto.png',
			];

			//masuk ke db
			$this->db->insert('anggota', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congrats!! Your account has been created. Please Login</div>');
			redirect('auth');
		}
		
	}

	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5($password);

		$anggota = $this->db->get_where('anggota', ['username' => $username, 'password' => $password])->row_array();

		//jika ada di db
		if($anggota){
			if ($anggota['user_level'] == 1){
				$data = [
				'username' => $anggota['username'],
				'level' => $anggota['user_level']
				];
				$this->session->set_userdata($data);
				redirect('admin/home');
			}else if($anggota['user_level'] == 0){
				$data = [
				'usernameb' => $anggota['username'],
				'levelb' => $anggota['user_level']
				];
				$this->session->set_userdata($data);
				redirect('baru');
			}
			else if ($anggota['user_level'] == 2){
				$data = [
				'usernamep' => $anggota['username'],
				'levelp' => $anggota['user_level']
				];
				$this->session->set_userdata($data);
				redirect('member/home');
			}else if ($anggota['user_level'] == 3){
				$data = [
				'usernamea' => $anggota['username'],
				'levela' => $anggota['user_level']
				];
				$this->session->set_userdata($data);
				redirect('alumni/home');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah</div>');
				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah</div>');
			redirect('auth');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu telah Log Out</div>');
		redirect ('auth');
	}
}
?>