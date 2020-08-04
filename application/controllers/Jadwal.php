<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jadwal');
	}
	public function index()
	{
		
		 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Jadwal file',
            'jadwal'=>$this->m_jadwal->lists(),
            'isi' => 'admin/jadwal/v_lists'

    		);
     $this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('ket_file', 'NIP', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./file_jadwal/';
                $config['allowed_types']        = 'doc|docx|pdf|jpg|ppt|pptx|txt';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('file'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah File Kurikulum',	
	 					'error'	 =>$this->upload->display_errors(),	
	            		'isi'    => 'admin/jadwal/v_add'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./file_jadwal/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

		                       $data=array(

		                       			
					                       	'ket_file'		=> $this->input->post('ket_file'),
					                    	'tahun'			=>$this->input->post('tahun'),
					                       	'file' 			=>$upload_data['uploads']['file_name'],
					                       	
					                       	
		                       );

                       $this->m_jadwal->add($data);
                       $this->session->set_flashdata('pesan', 'Data  Berhasil Di Upload');
                       redirect('jadwal');

                }			

			
		}
                   	 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Tambah Data Jadwal',
            'isi' => 'admin/jadwal/v_add'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       

	}

	public function edit($id_file)
	{
				$this->form_validation->set_rules('ket_file', 'Ket File', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./file_jadwal/';
                $config['allowed_types']        = 'doc|docx|pdf|jpg|ppt|pptx|txt';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('file'))
                {
                    	 $data=array(

	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Edit File',	
	 					'error'	=>$this->upload->display_errors(),	
	 					'download'   =>$this->m_jadwal->detail($id_file),
	            		'isi'    => 'admin/jadwal/v_edit'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./file_jadwal/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);
                        

                        $jadwal=$this->m_jadwal->detail($id_file);
                       if ($jadwal->file !="") {
                       	unlink('./file_jadwal/'.$jadwal->file);
                       	# code...
                       }
		                       $data=array(
		                       				'id_file'			=>$id_file,	
					                       	'ket_file'			=> $this->input->post('ket_file'),
					                       	'tahun'				=>$this->input->post('tahun'),
					                       	'file' 				=>$upload_data['uploads']['file_name'],
					                       	
					                       	
		                       );

                       $this->m_jadwal->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('jadwal');

                }

		                       $data=array(
		                       				'id_file'			=>$id_file,	

					                       	'ket_file'		=> $this->input->post('ket_file'),
		                       				'tahun'			=> $this->input->post('tahun'),
					                       	
					                       	
		                       );

                       $this->m_jadwal->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('jadwal');
			

			
		}

                   	 $data=array(
 	   		'id_file'	=>$id_file,
            'title1' 	=> 'Sekolah St. Yosefa',	
            'title2'	=>'Edit File',
    		'jadwal'   	=>$this->m_jadwal->detail($id_file),

            'isi' 		=> 'admin/jadwal/v_edit'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}

	public function delete($id_file)
	{
		  $jadwal=$this->m_jadwal->detail($id_file);
                       if ($jadwal->file !="") {
                       	unlink('./file_jadwal/'.$jadwal->file);
                       	# code...
                       }

                       $data = array(
                       	'id_file' => $id_file


                        );
                       $this->m_jadwal->delete($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil DiHapus');
                       redirect('jadwal');		


	}



}

/* End of file Jadwal.php */
/* Location: ./application/controllers/Jadwal.php */