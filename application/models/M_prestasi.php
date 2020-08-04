<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prestasi extends CI_Model {

	public function add($data)
	{
		$this->db->insert('tbl_prestasi', $data);
	}
	public function lists()
{
	$this->db->select('*');
	$this->db->from('tbl_prestasi');

	$this->db->order_by('id_prestasi', 'desc');

	return $this->db->get()->result();
	# code...
}
public function detailprestasi($id)
{
	$this->db->select('*');
	$this->db->from('tbl_prestasi');
	$this->db->where('id_prestasi', $id);
	return $this->db->get()->row();
}
	public function edit($data)
	{

		    $this->db->where('id_prestasi', $data['id_prestasi']);
		 	 $this->db->update('tbl_prestasi', $data);

	}
	

}

/* End of file M_prestasi.php */
/* Location: ./application/models/M_prestasi.php */