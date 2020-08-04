<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
				$this->load->model('m_home');
				$this->load->model('m_setting');
                $this->load->model('m_pengumuman');
                $this->load->model('m_prestasi');
                $this->load->model('m_fasilitas');
                $this->load->model('m_kurikulum');
                $this->load->model('m_jadwal');

	}
	
	public function index()
    {

    		
		 $data=array(
            'title'                 => 'Web Sekolah',
            'pengumuman'            =>$this->m_pengumuman->lists(),
            'home'		                 =>$this->m_home->slider_berita(),
            'berita'                 =>$this->m_home->latest_beritahome(),
            'isi' => 'v_home'
        );
     $this->load->view('layout/v_wrapper_home',$data,FALSE);
       
    }
    public function tentang()
    {
    		 $data=array(
            'title' => 'Web Sekolah',
            
            'isi' => 'v_about'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);
       
    }

        public function prestasi()
    {

    
         $data=array(

            'title'             =>  'Profil Seklah',
         
            'prestasi'            =>  $this->m_prestasi->lists(),
            'isi'               => 'v_prestasi'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);


    }
    public function kurikulum()
    {
        $data = array(


            'title'             =>  'Profil Seklah',
         
            'kurikulum'            =>  $this->m_kurikulum->lists(),
            'isi'               => 'v_kurikulum'


        );
             $this->load->view('layout/v_wrapper',$data,FALSE);
    }
    public function jadwal()
    {

        $data = array(


            'title'             =>  'Jadwal ',
         
            'jadwal'            =>  $this->m_jadwal->lists(),

            'isi'               => 'v_jadwal'


        );
             $this->load->view('layout/v_wrapper',$data,FALSE);

    }
    public function profil()
    {

    
    	 $data=array(

            'title' 			=>  'Profil Seklah',
         
            'profil'			=>	$this->m_setting->detail_profil(),
            'isi' 				=> 'v_profil_sekolah'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);


    }
     public function ekstra()
    {

    
        $data = array(  
              
            'ekstra'=>$this->m_home->listsekstra(),
            'title' =>'Ekstrakulikuler' , 
            'isi'   =>'v_ekstrakulikuler'


            );
             $this->load->view('layout/v_wrapper', $data, FALSE);

    }
    public function visi_misi()

{
    $data = array('title' => 'Visi Misi',
     'profil'=> $this->m_setting->detail_profil(),   
      'isi'                 => 'v_visi_misi'
     );
      $this->load->view('layout/v_wrapper',$data,FALSE);


}



    public function berita()	
    {

    	$this->load->library('pagination');
    	$config['base_url']=base_url('home/berita');
    	$config['total_rows']=count($this->m_home->total_berita());
    	$config['per_page']=8;
    	$config['uri_segment']=3;

    	$limit =$config['per_page'];
    	$start= ($this->uri->segment(3)) ? ($this->uri->segment(3)):0;


    	$config['first_link']='First';
    	$config['last_link']='Last';
    	$config['next_link']='Next';
    	$config['prev_link']='Prev';

    		
    	
    	$config['num_tag_open']='<li>';
    	$config['num_tag_close']='</li>';


    	$config['cur_tag_open']='<li class="active"><a>';
    	$config['cur_tag_close']='</a></li >';

    	$config['next_tag_open']='<li>';
    	$config['next_tag_close']='</li>';
    		
    	
		$config['prev_tag_open']='<li>';
		$config['prev_tag_close']='</li>';


		$config['firts_tag_open']='<li>';	
    	$config['firts_tag_close']='</li>';	
    	

    	$config['last_tag_open']='<li>';	
		$config['last_tag_close']='</li>';	



		$this->pagination->initialize($config);

    	$data = array(	
    				 	'latest_berita'=>$this->m_home->latest_berita(),
    		'paginasi'=>$this->pagination->create_links(),
    		'berita'=>$this->m_home->berita($limit,$start),
    		'title' =>'Berita' , 
    		'isi'	=>'v_berita'


			);
    	$this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function detail_berita($slug_berita)
   {
    $this->load->helper('download');


		 $data=array(
		 	'latest_berita'=>$this->m_home->latest_berita(),
            'title' 	=> 		'Detail Berita',
            'berita'	=>	$this->m_home->detail_berita($slug_berita),
            'isi' 		=> 'v_detail_berita'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);	   	

    }

     public function detail_ekstra($slug)
   {
    $this->load->helper('download');


         $data=array(
          
            'title'     =>      'Detail Berita',
            'ekstra'    =>  $this->m_home->detail_ekstra($slug),
            'isi'       => 'v_detail_ekstra'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);     

    }

    public function guru()
    {
    	 


		 $data=array(
            'title' 	=> 	'Downlaod File',
            'guru'	=>	$this->m_home->guru(),
            'isi' 		=> 'v_guru'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);
       
    }
    public function fasilitas()
    {
         $data=array(
            'title'     =>  'Fasilitas',
            'fasilitas'  =>  $this->m_fasilitas->lists(),
            'isi'       => 'v_fasilitas'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);
    }
    public function lakukan_download($id_file)
    {
     
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->m_home->getRows(array('id_file' => $id_file));
            
            //file path
            $file = 'file/'.$fileInfo['file'];
            
            //download file from directory
            force_download($file, NULL);
    
    }
     public function download_kurikulum($id_file)
    {
     
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->m_home->getRowss(array('id_file' => $id_file));
            
            //file path
            $file = 'file_kurikulum/'.$fileInfo['file'];
            
            //download file from directory
            force_download($file, NULL);
    
    }
      public function download_jadwal($id_file)
    {
     
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->m_home->getRowsss(array('id_file' => $id_file));
            
            //file path
            $file = 'file_jadwal/'.$fileInfo['file'];
            
            //download file from directory
            force_download($file, NULL);
    
    }

    public function detail_gallery($detail_gallery)
    {
    		 $data=array(

            'title' 			=>  'Detail Gallery',
            'nama_gallery'	    =>	$this->m_home->nama_gallery($detail_gallery),		
            'detail_gallery'	=>	$this->m_home->detail_gallery($detail_gallery),
            'isi' 				=> 'v_detail_gallery'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);
    }
    public function download()
    {
   
    $this->load->helper('download');


		 $data=array(
            'title' 	=> 		'Downlaod File',
            'download'	=>	$this->m_home->download(),
            'isi' 		=> 'v_download'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);
       

    }

    
    public function gallery()
    {
   
    $this->load->helper('download');


		 $data=array(
            'title' 	=> 		'Gallery Foto',
            'gallery'	=>		$this->m_home->gallery(),
            'isi' 		=> 		'v_gallery'
        );
     $this->load->view('layout/v_wrapper',$data,FALSE);
       

    }
     
}


 ?>