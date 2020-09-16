<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Model_admin extends CI_Model{
  		public function user_baru(){
  			$user_level = 0;
  			$this->db->where('user_level', $user_level);
			return $this->db->get('anggota');
		}

		// Edit Profile
		public function tampil_datauser($nim){
			$this->db->select('*');
			$this->db->from('anggota');
			$this->db->where(array('nim' => $nim));
			return $this->db->get();
		}

		public function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		// Edit Pengurus
		public function tampil_pengurususer($nim){
			$this->db->select('*');
			$this->db->from('pengurus');
  			$this->db->join('anggota','anggota.nim = pengurus.nim');
  			$this->db->join('divisi','divisi.id_divisi = pengurus.divisi');
  			$this->db->join('jabatan','jabatan.id_jabatan = pengurus.jabatan');
			$this->db->where(array('pengurus.nim' => $nim));
			$this->db->order_by("pengurus.tahun", "ASC");
			return $this->db->get();
		}

		public function tambah_kepengurusan($data, $table){
			$this->db->insert($table, $data);
		}

		public function get_divisi(){
    		$query = $this->db->query('SELECT * FROM divisi WHERE id_divisi !=0');
    		return $query->result();
		}

		public function get_jabatan(){
    		$query = $this->db->query("SELECT * FROM jabatan");
    		return $query->result();
		}

		public function count_pengurus($nim){
			$this->db->select('*');
			$this->db->from('pengurus');
			$this->db->where(array('nim' => $nim));
			$query=$this->db->get();
			return $query->result();
		}

		// Anggota
		public function detail_anggota($nim, $tahun){
			$this->db->select('*');
			$this->db->from('pengurus');
  			$this->db->join('anggota','anggota.nim = pengurus.nim');
  			$this->db->join('divisi','divisi.id_divisi = pengurus.divisi');
  			$this->db->join('jabatan','jabatan.id_jabatan = pengurus.jabatan');
			$this->db->where(array('pengurus.nim' => $nim));
			$this->db->where(array('pengurus.tahun' => $tahun));
			return $this->db->get();
		}

		public function get_proker($tahun){
			$this->db->select('*');
			$this->db->from('data_proker');
  			$this->db->join('divisi','divisi.id_divisi = data_proker.divisi');
			$this->db->where(array('data_proker.tahun' => $tahun));
			$query=$this->db->get();
			return $query->result();
		}

		public function is_ada_user($username){
			$this->db->select('*');
			$this->db->from('anggota');
			$this->db->where(array('username' => $username));
			$query=$this->db->get();
   			return $query->result();
		}

		public function is_ada_nim($nim){
			$this->db->select('*');
			$this->db->from('anggota');
			$this->db->where(array('nim' => $nim));
			$query=$this->db->get();
   			return $query->result();
		}

		public function tampil_anggota(){
			$this->db->select('*');
			$this->db->from('anggota');
			$query = $this->db->get()->result();
			return $query;
		}

		public function edit_anggota($nim){
			$this->db->select('*');
			$this->db->from('anggota');
			$this->db->where(array('nim' => $nim));
			$query = $this->db->get();
			return $query;
		}

		// Detail Anggota
		public function getAllTahun(){
  			$this->db->distinct();
  			$this->db->select('tahun');
  			$this->db->order_by('tahun', 'DESC');
  			return $this->db->get('pengurus')->result();
  		}

  		public function tampil_ph($id=NULL,$tahun=NULL){
			$this->db->select('*');
			$this->db->from('pengurus');
  			$this->db->join('anggota','anggota.nim = pengurus.nim');
  			$this->db->join('divisi','divisi.id_divisi = pengurus.divisi');
  			$this->db->join('jabatan','jabatan.id_jabatan = pengurus.jabatan');
  			// $id=3;
			$this->db->where('pengurus.jabatan', $id);
  			$this->db->where('tahun', $tahun);
			$this->db->order_by("jabatan.id_jabatan", "ASC");
			$query = $this->db->get()->result();
			return $query;
		}

		public function tampil_sekben($id=NULL,$id2=NULL,$tahun=NULL){
			$this->db->select('*');
			$this->db->from('pengurus');
  			$this->db->join('anggota','anggota.nim = pengurus.nim');
  			$this->db->join('divisi','divisi.id_divisi = pengurus.divisi');
  			$this->db->join('jabatan','jabatan.id_jabatan = pengurus.jabatan');
			$this->db->where("tahun",$tahun)->where("(pengurus.jabatan='$id' OR pengurus.jabatan='$id2')");
			$this->db->order_by("jabatan.id_jabatan", "ASC");
			$query = $this->db->get()->result();
			return $query;
		}

		public function tampil_divisi($id=NULL,$tahun=NULL){
			$this->db->select('*');
			$this->db->from('pengurus');
  			$this->db->join('anggota','anggota.nim = pengurus.nim');
  			$this->db->join('divisi','divisi.id_divisi = pengurus.divisi');
  			$this->db->join('jabatan','jabatan.id_jabatan = pengurus.jabatan');
			$this->db->where('pengurus.divisi', intval($id));
  			$this->db->where('tahun', $tahun);
			$this->db->order_by("jabatan.id_jabatan", "ASC");
			$query = $this->db->get()->result();
			return $query;
		}

		// Proker
		public function tampil_data($tahun){
			$this->db->select('*');
			$this->db->from('data_proker');
			$this->db->join('divisi', 'divisi.id_divisi = data_proker.divisi');
			$this->db->where('tahun', $tahun);
			return $this->db->get();
		}

		public function tambah_proker($data, $table){
			$this->db->insert($table, $data);
		}

		public function tampil_proker($id){
			$this->db->select('*');
			$this->db->from('data_proker');
  			$this->db->join('divisi','divisi.id_divisi = data_proker.divisi');
			$this->db->where(array('data_proker.id_proker' => $id));
			return $this->db->get();
		}

		public function hapus_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		// Kelola User

		public function setujui($where,$table){
			$user_level = 2;
			$this->db->where($where);
			$this->db->update($table, ['user_level' => $user_level]);
		}

		public function batalkan($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function get_profile($username){
			$this->db->select('*');
			$this->db->from('anggota');
			$this->db->where('username', $username);
			return $this->db->get();
		}

		public function edit_data($where,$table){
			return $this->db->get_where($table,$where);
		}

		public function tampil_all(){
			$this->db->select('*');
			$this->db->from('pengurus');
  			$this->db->join('anggota','anggota.nim = pengurus.nim');
  			$this->db->join('divisi','divisi.id_divisi = pengurus.divisi');
  			$this->db->join('jabatan','jabatan.id_jabatan = pengurus.jabatan');
			$query = $this->db->get()->result();
			return $query;
		}

		public function birthday($where, $tahun){
			$this->db->select('*');
			$this->db->from('pengurus');
  			$this->db->join('anggota','anggota.nim = pengurus.nim');
  			$this->db->join('divisi','divisi.id_divisi = pengurus.divisi');
			$this->db->where(array('bulan_lahir' => $where));
			$this->db->where(array('pengurus.tahun' => $tahun));
			$this->db->order_by('tgl_lahir','ASC');
			$query = $this->db->get()->result();
			return $query;
		}
  }
?>