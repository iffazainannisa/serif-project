<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class MAnggota extends CI_Model{
  	public function tampilAnggota($nim){
  		$this->db->select('*');
  		$this->db->from('anggota');
  		$this->db->where('nim', $nim);
  		$query = $this->db->get();
  		$result = $query->result();
  		return $result;
  	}

  	public function updateAnggota($nim, $data){
  		$this->db->where('nim',$nim);
  		$this->db->update('anggota',$data);
  	}

    public function tampilAnggotaBaru(){
      $level=0;
      $this->db->from('anggota');
      $this->db->where('user_level', $level);
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }
  }
?>