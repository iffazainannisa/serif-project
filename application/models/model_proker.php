<?php

class Model_proker extends CI_Model
{
	public function tampil_data($tahun)
	{
		$this->db->select('*');
		$this->db->from('data_proker');
		$this->db->join('divisi', 'divisi.id_divisi = data_proker.divisi');
		$this->db->where('tahun', $tahun);
		return $this->db->get();
	}

	public function tambah_proker($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_proker($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('isbn', $id)
			->limit(1)
			->get('tb_buku');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	public function detail_proker($id_proker)
	{
		$result = $this->db->where('id_proker', $id_proker)
			->get('data_proker');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_buku');
		$this->db->like('judul', $keyword);
		$this->db->or_like('pengarang', $keyword);
		$this->db->or_like('kategori', $keyword);
		return $this->db->get()->result();
	}

	public function tampil_proker($id){
			$this->db->select('*');
			$this->db->from('data_proker');
  			$this->db->join('divisi','divisi.id_divisi = data_proker.divisi');
			$this->db->where(array('data_proker.id_proker' => $id));
			return $this->db->get();
	}
}
