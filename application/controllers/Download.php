<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_download');
	}

	public function index()
	{
		 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'File Download',
            'download'=>$this->m_download->lists(),
            'isi' => 'admin/download/v_lists'

    );
     $this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}
	public function add()
	{

		$this->form_validation->set_rules('ket_file', 'NIP', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./file/';
                $config['allowed_types']        = 'doc|docx|pdf|jpg|ppt|pptx|txt';
                $config['max_size']             = 2000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('file'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah File Download',	
	 					       'error'	=>$this->upload->display_errors(),	
	            		'isi'    => 'admin/download/v_add'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./file/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

		                       $data=array(
					                       	'ket_file'		=> $this->input->post('ket_file'),
					                       	'file' 	=>		$upload_data['uploads']['file_name'],
					                       	
					                       	
		                       );

                       $this->m_download->add($data);
                       $this->session->set_flashdata('pesan', 'Data  Berhasil Di Upload');
                       redirect('download');

                }			

			
		}
                   	 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Tambah Data Download',

            'isi' => 'admin/download/v_add'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       


	}

		public function edit($id_file)
	{
				$this->form_validation->set_rules('ket_file', 'Ket File', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./file/';
                $config['allowed_types']        = 'doc|docx|pdf|jpg|ppt|pptx|txt';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('file'))
                {
                    	 $data=array(

	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Edit File',	
	 					'error'	=>$this->upload->display_errors(),	
	 					'download'   =>$this->m_download->detail($id_file),
	            		'isi'    => 'admin/download/v_edit'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./file/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);
                        

                        $download=$this->m_download->detail($id_file);
                       if ($download->file !="") {
                       	unlink('./file/'.$download->file);
                       	# code...
                       }
		                       $data=array(
		                       				'id_file'			=>$id_file,	
					                       	'ket_file'		=> $this->input->post('ket_file'),

					                       	'file' 	=>$upload_data['uploads']['file_name'],
					                       	
					                       	
		                       );

                       $this->m_download->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('download');

                }

		                       $data=array(
		                       				'id_file'			=>$id_file,	
					                       	'ket_file'		=> $this->input->post('ket_file'),
					                       	
					                       	
		                       );

                       $this->m_download->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('download');
			

			
		}

                   	 $data=array(
 	   		'id_file'	=>$id_file,
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Edit File',
    		'download'   =>$this->m_download->detail($id_file),

            'isi' => 'admin/download/v_edit'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}


	public function delete($id_file)
	{
		  $download=$this->m_download->detail($id_file);
                       if ($download->file !="") {
                       	unlink('./file/'.$download->file);
                       	# code...
                       }

                       $data = array('id_file' => $id_file


                        );
                       $this->m_download->delete($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil DiHapus');
                       redirect('download');		


	}







}

/* End of file Download.php */
/* Location: ./application/controllers/Download.php */