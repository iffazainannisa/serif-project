<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Model_home extends CI_Model{
  	public function countData(){

  		$totalanggota = "SELECT COUNT(*) AS jumlah_anggota FROM anggota";
  		$totalanggota = $this->db->query($totalanggota)->row_array();

  		$totalproker = "SELECT COUNT(*) AS jumlah_proker FROM data_proker";
  		$totalproker = $this->db->query($totalproker)->row_array();

      $totaluser = "SELECT COUNT(*) AS jumlah_user FROM anggota WHERE user_level=0";
      $totaluser = $this->db->query($totaluser)->row_array();

  		$data['totalanggota']=$totalanggota['jumlah_anggota'];
      $data['totalproker']=$totalproker['jumlah_proker'];
  		$data['totaluser']=$totaluser['jumlah_user'];
  		return $data;
  	}
  }
?>