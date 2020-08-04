<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model {

	public function lists()
{
	$this->db->select('*');
	$this->db->from('tbl_fasilitas');
	
	$this->db->order_by('id_fasilitas', 'desc');
	return $this->db->get()->result();
	# code...
}
	
public function add($data)
{
	$this->db->insert('tbl_fasilitas', $data);
}
public function detail($id_fasilitas)
{

$this->db->select('*');
$this->db->from('tbl_fasilitas');

$this->db->where('id_fasilitas',$id_fasilitas);
return $this->db->get()->row();

}	
public function edit($data)
{

	    $this->db->where('id_fasilitas', $data['id_fasilitas']);
	 	 $this->db->update('tbl_fasilitas', $data);

}
public function delete($data)
{

	    $this->db->where('id_fasilitas', $data['id_fasilitas']);
	 	 $this->db->delete('tbl_fasilitas', $data);

}


}

/* End of file M_fasilitas.php */
/* Location: ./application/models/M_fasilitas.php */