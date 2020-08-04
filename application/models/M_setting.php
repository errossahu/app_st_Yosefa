<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {

	public function detail()

	{
		$this->db->select('*');
		$this->db->from('tbl_setting');
		$this->db->where('id', 1);
		$this->db->order_by('id', 'desc');
		return $this->db->get()->row();

		# code...
	}
		public function detail_nama()

	{
		$this->db->select('nama_sekolah');
		$this->db->from('tbl_setting');
		$this->db->where('id', 1);
		$this->db->order_by('id', 'desc');
		return $this->db->get()->row();

		# code...
	}
	public function detail_profil()
	{

		$this->db->select('*');
		$this->db->from('tbl_setting');
		$this->db->where('id', 1);
		$this->db->order_by('id', 'desc');
		return $this->db->get()->row();
	}

		public function profil()

	{
		$this->db->select('nama_sekolah,alamat,no_telephone,kepala_sekolah,foto_kepsek,visi,misi,sejarah');
		$this->db->from('tbl_setting');
		$this->db->where('id', 1);
		$this->db->order_by('id', 'desc');
		return $this->db->get()->row();

		# code...
	}

	public function edit($data)
	{

	    $this->db->where('id', 1);
	 	 $this->db->update('tbl_setting', $data);

	}
	

}

/* End of file M_setting.php */
/* Location: ./application/models/M_setting.php */