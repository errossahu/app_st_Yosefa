<?php 
class Sitemap extends CI_Controller {
 public function index(){
     $this->load->model('m_sitemap');
     $this->load->helper('url');
     $data['berita'] = $this->m_sitemap->create();
     $this->load->view('v_sitemap',$data);
 }
}
 
?>