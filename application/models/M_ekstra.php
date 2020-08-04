<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_ekstra extends CI_Model {

	public function add($data)
	{
		$this->db->insert('tbl_ekstra', $data);

	}	
public function lists()
{
	$this->db->select('*');
	$this->db->from('tbl_ekstra');

	$this->db->order_by('id_ekstra', 'desc');

	return $this->db->get()->result();
	# code...
}

public function edit($data)
{

	    $this->db->where('id_ekstra', $data['id_ekstra']);
	 	 $this->db->update('tbl_ekstra', $data);

}
public function detail($id_ekstra)
{

		$this->db->select('*');
		$this->db->from('tbl_ekstra');

		$this->db->where('id_ekstra',$id_ekstra);
		return $this->db->get()->row();

}
public function delete($data)
{

	    $this->db->where('id_ekstra', $data['id_ekstra']);
	 	 $this->db->delete('tbl_ekstra', $data);

}


}

/* End of file M_ekstra.php */
/* Location: ./application/models/M_ekstra.php */

?>