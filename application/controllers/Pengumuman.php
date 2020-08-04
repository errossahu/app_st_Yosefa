<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('m_pengumuman');
	}

	  public function index()
    {
    	
		 $data=array(
            
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Pengumuman',
            
 			'pengumuman'=>$this->m_pengumuman->lists(),
 			'isi'=>'admin/pengumuman/v_lists'	
        );	
     $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       
    }
    public function add()
	{
				$this->form_validation->set_rules('isi_pengumuman', 'judul_pengumuman', 'required');
				$this->form_validation->set_rules('judul_pengumuman', 'judul_pengumuman', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./pengumuman_sekolah/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('pengumuman_sekolah'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah Pengumuman',	
	 					'error'	 =>$this->upload->display_errors(),	
	            		'isi'    => 'admin/pengumuman/v_add'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./pengumuman_sekolah/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

		                       $data=array(
		                       				'judul_pengumuman'	=>$this->input->post('judul_pengumuman'),
					                       	'isi_pengumuman'	=> $this->input->post('isi_pengumuman'),
					                       	'tgl'	=> date('Y-m-d'),
					                       	'pengumuman_sekolah' =>$upload_data['uploads']['file_name'],
					                       	
					                       	
		          					);

                       $this->m_pengumuman->add($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('pengumuman');

                }			

			
		}
            $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data Pengumuman',

            'isi' => 'admin/pengumuman/v_add'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
  

			
		
	
	}
	 public function edit($id_pengumuman)
	{
				$this->form_validation->set_rules('isi_pengumuman', 'judul_pengumuman', 'required');
				$this->form_validation->set_rules('judul_pengumuman', 'judul_pengumuman', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

			if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./pengumuman_sekolah/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('pengumuman_sekolah'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Edit Pengumnan',	
	 					 'error'	=>$this->upload->display_errors(),	
	 					 'gallery'   =>$this->m_pengumuman->detail($id_pengumuman),
	            		'isi'    => 'admin/Pengumuman/v_edit'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./pengumuman_sekolah/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);
                        

                        $pengumuman=$this->m_pengumuman->detail($id_pengumuman);
                       if ($pengumuman->pengumuman_sekolah !="") {
                       	unlink('./pengumuman_sekolah/'.$pengumuman->pengumuman_sekolah);
                       	# code...
                       }
		                       $data=array(

		                       				'id_pengumuman'			=>$id_pengumuman,	
					                       	'judul_pengumuman'		=> $this->input->post('judul_pengumuman'),
					                       	'isi_pengumuman'		=>	$this->input->post('isi_pengumuman'),
					                       	'foto_pengumuman' 		=>	$upload_data['uploads']['file_name'],
					                       	
					                       	
		                       );

                       $this->m_pengumuman->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('pengumuman');

                }


		                       $data=array(
		                       				'id_pengumuman'			=>$id_pengumuman,	
					                       	'judul_pengumuman'		=> $this->input->post('judul_pengumuman'),
					                      	'isi_pengumuman'		=>$this->input->post('isi_pengumuman'), 	
					                       	
		                       );

	                       $this->m_pengumuman->edit($data);
	                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
	                       redirect('pengumuman');
			
		


           }
                 	 $data=array(
           	   		'id_pengumuman'	=>$id_pengumuman,
                      'title1' => 'Sekolah St. Yosefa',	
                      'title2'=>'Pengumuman Sekolah',
              		'pengumuman'   =>$this->m_pengumuman->detail($id_pengumuman),

                      'isi' => 'admin/pengumuman/v_edit'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);

	
	}



	public function delete($id_pengumuman)
	{
		$data = array('id_pengumuman' => $id_pengumuman);
		$this->m_pengumuman->delete($data);
		$this->session->flashdata('pesan','Data Berhasil Dihapus');
		redirect('pengumuman'); 	
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */