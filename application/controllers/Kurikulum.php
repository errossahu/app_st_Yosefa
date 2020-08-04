<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kurikulum');
	}

	public function index()
	{
		
		 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Kurikulum file',
            'kurikulum'=>$this->m_kurikulum->lists(),
            'isi' => 'admin/Kurikulum/v_lists'

    );
     $this->load->view('admin/layout/v_wrapper',$data,FALSE);
			
	}




		public function add()
	{

		$this->form_validation->set_rules('ket_file', 'NIP', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./file_kurikulum/';
                $config['allowed_types']        = 'doc|docx|pdf|jpg|ppt|pptx|txt';
                $config['max_size']             = 100;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('file'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah File Kurikulum',	
	 					       'error'	=>$this->upload->display_errors(),	
	            		'isi'    => 'admin/kurikulum/v_add'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./file_kurikulum/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

		                       $data=array(
		                       			
					                       	'ket_file'		=> $this->input->post('ket_file'),
					                    	'tahun'			=>$this->input->post('tahun'),
					                       	'file' 			=>$upload_data['uploads']['file_name'],
					                       	
					                       	
		                       );

                       $this->m_kurikulum->add($data);
                       $this->session->set_flashdata('pesan', 'Data  Berhasil Di Upload');
                       redirect('kurikulum');

                }			

			
		}
                   	 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Tambah Data Kurikulum',

            'isi' => 'admin/kurikulum/v_add'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       


	}
	public function delete($id_file)
	{
		  $kurikulum=$this->m_kurikulum->detail($id_file);
                       if ($kurikulum->file !="") {
                       	unlink('./file_kurikulum/'.$kurikulum->file);
                       	# code...
                       }

                       $data = array('id_file' => $id_file


                        );
                       $this->m_kurikulum->delete($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil DiHapus');
                       redirect('kurikulum');		


	}


	public function edit($id_file)
	{
				$this->form_validation->set_rules('ket_file', 'Ket File', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./file_kurikulum/';
                $config['allowed_types']        = 'doc|docx|pdf|jpg|ppt|pptx|txt';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('file'))
                {
                    	 $data=array(

	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Edit File',	
	 					'error'	=>$this->upload->display_errors(),	
	 					'download'   =>$this->m_kurikulum->detail($id_file),
	            		'isi'    => 'admin/kurikulum/v_edit'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./file_kurikulum/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);
                        

                        $kurikulum=$this->m_kurikulum->detail($id_file);
                       if ($kurikulum->file !="") {
                       	unlink('./file_kurikulum/'.$kurikulum->file);
                       	# code...
                       }
		                       $data=array(
		                       				'id_file'			=>$id_file,	
					                       	'ket_file'			=> $this->input->post('ket_file'),
					                       	'tahun'				=>$this->input->post('tahun'),
					                       	'file' 				=>$upload_data['uploads']['file_name'],
					                       	
					                       	
		                       );

                       $this->m_kurikulum->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('kurikulum');

                }

		                       $data=array(
		                       				'id_file'			=>$id_file,	

					                       	'ket_file'		=> $this->input->post('ket_file'),
		                       				'tahun'			=> $this->input->post('tahun'),
					                       	
					                       	
		                       );

                       $this->m_kurikulum->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('kurikulum');
			

			
		}

                   	 $data=array(
 	   		'id_file'	=>$id_file,
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Edit File',
    		'kurikulum'   =>$this->m_kurikulum->detail($id_file),

            'isi' => 'admin/kurikulum/v_edit'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}














}

/* End of file Kurikulum.php */
/* Location: ./application/controllers/Kurikulum.php */