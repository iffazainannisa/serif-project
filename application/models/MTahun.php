<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class MTahun extends CI_Model{
  		public function getPengurusTahun($nim){
  			$this->db->set('nim',$nim);
  			$this->db->set('nama',$nama);

  		}
  }
?>