<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

public function lists()
{
	$this->db->select('*');
	$this->db->from('tbl_siswa');
	$this->db->order_by('id_siswa', 'desc');
	return $this->db->get()->result();
	# code...
}
public function kelas_7()
{
	$data=7;
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->where('kelas',$data);
		return $this->db->get()->result();


}
public function kelas_8()
{
	$data=8;
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->where('kelas',$data);
		return $this->db->get()->result();


}
public function kelas_9()
{
	$data=9;
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->where('kelas',$data);
		return $this->db->get()->result();


}
	
public function add($data)
{
	$this->db->insert('tbl_siswa', $data);
}
public function detail($id_siswa)
{

		$this->db->select('*');
		$this->db->from('tbl_siswa');

		$this->db->where('id_siswa',$id_siswa);
	return $this->db->get()->row();

}	
public function edit($data)
{

	    $this->db->where('id_siswa', $data['id_siswa']);
	 	 $this->db->update('tbl_siswa', $data);

}
public function delete($data)
{

	    $this->db->where('id_siswa', $data['id_siswa']);
	 	 $this->db->delete('tbl_siswa', $data);

}

}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */