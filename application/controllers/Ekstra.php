<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstra extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_ekstra');
	}
	public function index()
	{

		
		 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data Ekstrakulikuler',
            'ekstra'=>$this->m_ekstra->lists(),
            'isi' => 'admin/ekstrakulikuler/v_lists'

        );	
		 
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       
	


	}
	public function edit($id_ekstra)
	{
		$this->form_validation->set_rules('nama_ekstra', 'Nama Ekstra', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./foto_ekstra/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('gambar'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Edit Berita',	
	 					'error'	=>$this->upload->display_errors(),	
	 					'ekstra'   =>$this->m_ekstra->detail($id_ekstra),
	            		'isi'    => 'admin/ekstrakulikuler/v_edit'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./foto_ekstra/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);
                        

                        $ekstra=$this->m_ekstra->detail($id_ekstra);
                       if ($ekstra->gambar !="") {
                       	unlink('./foto_ekstra/'.$ekstra->gambar);
                       	# code...
                       }
		                       $data=array(
		                       				'id_ekstra'			=>$id_ekstra,	
					                       	'nama_ekstra'		=> $this->input->post('nama_ekstra'),
					                       	'slug'				=> url_title($this->input->post('nama_ekstra'),'dash',TRUE) ,
					                       	'sekilas'			=>$this->input->post('sekilas'),
					                       	
					                       	'gambar' 	=>$upload_data['uploads']['file_name'],
					                     
					                       	
		                       );

                       $this->m_ekstra->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('ekstra');

                }

		                       $data=array(
		                       				'id_ekstra'			=>$id_ekstra,	
					                       	'nama_ekstra'		=> $this->input->post('nama_ekstra'),
					                       	'slug'				=> url_title($this->input->post('nama_ekstra'),'dash',TRUE) ,
					                       	'sekilas'			=>$this->input->post('sekilas'),
					                       	
		                       );

                       $this->m_ekstra->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('ekstra');
			

			
		}
                   	 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data ekstrakulikuler',
    		'ekstra'   =>$this->m_ekstra->detail($id_ekstra),
            'isi' => 'admin/ekstrakulikuler/v_edit'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       

	}


	public function delete($id_ekstra)
	{
		  $ekstra=$this->m_ekstra->detail($id_ekstra);
                       if ($ekstra->gambar !="") {
                       	unlink('./foto_ekstra/'.$ekstra->gambar);
                       	# code...
                       }

                       $data = array('id_ekstra' => $id_ekstra


                        );
                       $this->m_ekstra->delete($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil DiHapus');
                       redirect('ekstra');		


	}

	public function add()
	{

		$this->form_validation->set_rules('nama_ekstra', 'nama ekstra', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./foto_ekstra/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('gambar'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah Ekstrakulikuler',	
	 					'error'	=>$this->upload->display_errors(),	
	            		'isi'    => 'admin/ekstrakulikuler/v_add'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./foto_ekstra/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

					                       $data=array(
			               	'nama_ekstra'		=> $this->input->post('nama_ekstra'),
			               	'slug'				=> url_title($this->input->post('nama_ekstra'),'dash',TRUE) ,
			               	'sekilas'			=>$this->input->post('sekilas'),
			               	'gambar' 			=>$upload_data['uploads']['file_name'],
			               	
					                       	
		                       );

                       $this->m_ekstra->add($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('ekstra');

                }			

			
		}
                   	 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data Ekstrakulikuler',

            'isi' => 'admin/ekstrakulikuler/v_add'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}

}

/* End of file Ekstra.php */
/* Location: ./application/controllers/Ekstra.php */

?>