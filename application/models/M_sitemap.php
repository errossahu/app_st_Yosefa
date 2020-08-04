<?php
class M_Sitemap extends CI_Model {
    function __construct() {
        parent::__construct();
    }
  
    function create() {
        $this->db->select('id_berita, tgl_berita','slug_berita');
        $this->db->from('tbl_berita');
        $this->db->order_by('id_berita',"ASC");
        $query = $this->db->get();
        return $query->result();
    }
}
?>