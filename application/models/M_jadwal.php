<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

	
	public function lists()
	{

		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->order_by('tahun','desc');
		return $this->db->get()->result();
	}
	public function add($data)
	{
			$this->db->insert('tbl_jadwal', $data);
	}
	public function detail($id_file)
	{

	$this->db->select('*');
	$this->db->from('tbl_jadwal');

	$this->db->where('id_file',$id_file);
	return $this->db->get()->row();

	}
	public function edit($data)
	{
		$this->db->where('id_file', $data['id_file']);
		$this->db->update('tbl_jadwal', $data);
	}	
	public function delete($data)
	{
		$this->db->where('id_file', $data['id_file']);
		$this->db->delete('tbl_jadwal', $data);
	}

}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */