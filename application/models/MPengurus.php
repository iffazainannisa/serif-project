<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class MPengurus extends CI_Model{
  		public function getPengurusTahun($tahun){
  			//$tahun = 2019;
  			$query = $this->db->get_where('pengurus', array('tahun'=>$tahun));
  			return $query->result_array();
  		}

  		public function getAllTahun(){
  			$this->db->distinct();
  			$this->db->select('tahun');
  			$this->db->order_by('tahun', 'DESC');
  			return $this->db->get('pengurus')->result();
  		}
  }
?>