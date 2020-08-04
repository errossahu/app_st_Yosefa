<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function download()
	{
		$this->db->select('*');
		$this->db->from('tbl_file');
		$this->db->order_by('id_file', 'desc');
		return $this->db->get()->result();
	}	

	public function nama_gallery($id_gallery)
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id_gallery', $id_gallery);
		return $this->db->get()->row();

	}
	public function detail_gallery($id_gallery)
{
	// SELECT b.foto FROM tbl_foto b left join tbl_gallery a on a.id_gallery= b.id_gallery where a.id_gallery=8;


	$this->db->select('tbl_foto.foto,tbl_foto.ket_foto');
	$this->db->from('tbl_foto');
	$this->db->join('tbl_gallery', 'tbl_gallery.id_gallery = tbl_foto.id_gallery', 'left');
	$this->db->order_by('tbl_foto.id_foto');
	$this->db->where('tbl_gallery.id_gallery', $id_gallery);

		return $this->db->get()->result();


}
	public function listsekstra()
	{
			$this->db->select('*');
		$this->db->from('tbl_ekstra');
		return $this->db->get()->result();	


	}
	public function listberita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		return $this->db->get()->result();	

	}
	public function berita($limit , $start)
	{
	// 	$limit,$start
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('user', 'user.id_user = tbl_berita.id_user', 'left');
		$this->db->order_by('id_berita', 'desc');
		$this->db->limit($limit,$start);
		return $this->db->get()->result();
	}
	public function latest_beritahome()
	{

		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('user', 'user.id_user = tbl_berita.id_user', 'left');
		$this->db->limit(8);	
		$this->db->order_by('id_berita', 'desc');
				return $this->db->get()->result();
	}
	public function latest_berita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('user', 'user.id_user = tbl_berita.id_user', 'left');
		$this->db->limit(10);	
		$this->db->order_by('id_berita', 'desc');

		
		return $this->db->get()->result();
	}
	public function slider_berita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('user', 'user.id_user = tbl_berita.id_user', 'left');
		$this->db->limit(3);	
		$this->db->order_by('id_berita', 'desc');

		
		return $this->db->get()->result();
	}
	public function detail_berita($slug_berita)

	{
	// 	$limit,$start
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('user', 'user.id_user = tbl_berita.id_user', 'left');
		$this->db->where('slug_berita', $slug_berita);
		return $this->db->get()->row();
	}
	public function detail_ekstra($slug)

	{
	// 	$limit,$start
		$this->db->select('*');
		$this->db->from('tbl_ekstra');
		
		$this->db->where('slug', $slug);
		return $this->db->get()->row();
	}

	public function total_berita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('user', 'user.id_user = tbl_berita.id_user', 'left');
		$this->db->order_by('id_berita', 'desc');
		return $this->db->get()->result();
	}
	// Memunculkan berita dengan pagging
	public function guru()
	{
	
	$this->db->select('*');
	$this->db->from('tbl_guru');
	$this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_guru.id_mapel', 'left');
	$this->db->order_by('id_guru', 'desc');
	return $this->db->get()->result();
	}


	public function lakukan_download($id_file)
{

		$this->db->select('*');
		$this->db->from('tbl_file');

		$this->db->where('id_file',$id_file);
		return $this->db->get()->row();

}	

   public function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_file');

        $this->db->order_by('id_file','desc');
        if(array_key_exists('id_file',$params) && !empty($params['id_file'])){
            $this->db->where('id_file',$params['id_file']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

      public function getRowss($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_kurikulum');

        $this->db->order_by('id_file','desc');
        if(array_key_exists('id_file',$params) && !empty($params['id_file'])){
            $this->db->where('id_file',$params['id_file']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }
 public function getRowsss($params = array()){
 	
 	 $this->db->select('*');
        $this->db->from('tbl_jadwal');

        $this->db->order_by('id_file','desc');
        if(array_key_exists('id_file',$params) && !empty($params['id_file'])){
            $this->db->where('id_file',$params['id_file']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;





 	}

    public function gallery()
    {
    	
		$this->db->select('tbl_gallery.* ,count(tbl_foto.id_gallery) as jml_foto');
		$this->db->from('tbl_gallery');
		$this->db->join('tbl_foto', 'tbl_foto.id_gallery = tbl_gallery.id_gallery', 'left');
		$this->db->group_by('tbl_gallery.id_gallery');

		$this->db->order_by('tbl_gallery.id_gallery', 'desc');

		return $this->db->get()->result();
	}	
    


}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */