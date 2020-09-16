<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_anggota extends CI_Model
{
    public function tampil_anggota()
    {
        return $this->db->get('anggota');
    }

    public function detail_agt($nim)
    {
        $result = $this->db->where('nim', $nim)->get('anggota');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
