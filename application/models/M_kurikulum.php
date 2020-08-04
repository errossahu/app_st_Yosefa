<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kurikulum extends CI_Model {

	
	public function lists()
	{

		$this->db->select('*');
		$this->db->from('tbl_kurikulum');
		$this->db->order_by('tahun','asc');
		return $this->db->get()->result();
	}
	public function add($data)
	{
			$this->db->insert('tbl_kurikulum', $data);
	}
	public function delete($data)
	{
		$this->db->where('id_file', $data['id_file']);
		$this->db->delete('tbl_kurikulum', $data);
	}

	public function detail($id_file)
	{

	$this->db->select('*');
	$this->db->from('tbl_kurikulum');

	$this->db->where('id_file',$id_file);
	return $this->db->get()->row();

	}
	public function edit($data)
	{
		$this->db->where('id_file', $data['id_file']);
		$this->db->update('tbl_kurikulum', $data);
	}	
}

/* End of file M_kurikulum.php */
/* Location: ./application/models/M_kurikulum.php */