<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_fasilitas');
	}

	public function index()
	{

		 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Fasilitas',
            'fasilitas'=>$this->m_fasilitas->lists(),
            'isi' => 'admin/fasilitas/v_lists'

    );
     $this->load->view('admin/layout/v_wrapper',$data,FALSE);
			
					
	}
	public function add()
	{

	$this->form_validation->set_rules('nama_fasilitas', 'Pendidikan', 'required');
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./foto_fasilitas/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('foto'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah Fasilitas',
	            		'error'	 => $this->upload->display_errors(),
	            	
	            		'isi'    => 'admin/fasilitas/v_add'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./foto_fasilitas/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

		                       $data=array(
					                       	'nama_fasilitas'		=>$this->input->post('nama_fasilitas'),
					                       	'foto' 			=>$upload_data['uploads']['file_name']
		                       );

                       $this->m_fasilitas->add($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('fasilitas');

                }			

			
		}
                   	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah Fasilitas',
	            	
	            		'isi'    => 'admin/fasilitas/v_add'
	            	);
                   	 $this->load->view('admin/layout/v_wrapper', $data, FALSE);




	}
	public function edit($id_fasilitas)
	{

						$this->form_validation->set_rules('nama_fasilitas', 'Ket File', 'required');
	
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./foto_fasilitas/';
                $config['allowed_types']        = 'doc|docx|pdf|jpg|ppt|pptx|txt';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('foto'))
                {
                    	 $data=array(

	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Edit File',	
	 					'error'	=>$this->upload->display_errors(),	
	 					'fasilitas'   =>$this->m_fasilitas->detail($id_fasilitas),
	            		'isi'    => 'admin/fasilitas/v_edit'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./foto_fasilitas/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);
                        

                        $fasilitas=$this->m_fasilitas->detail($id_fasilitas);
                       if ($fasilitas->foto !="") {
                       	unlink('./foto_fasilitas/'.$fasilitas->foto);
                       	# code...
                       }
		                       $data=array(
		                       				'id_fasilitas'			=>$id_fasilitas,	
					                       	'nama_fasilitas'			=> $this->input->post('nama_fasilitas'),

					                       	'foto' 				=>$upload_data['uploads']['file_name'],
					                       	
					                       	
		                       );

                       $this->m_fasilitas->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('fasilitas');

                }

		                       $data=array(
		                       				'id_fasilitas'			=>$id_fasilitas,	

					                       	'nama_fasilitas'		=> $this->input->post('nama_fasilitas'),
		                       				
					                       	
		                       );

                       $this->m_fasilitas->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('fasilitas');
			

			
		}

                   	 $data=array(
 	   		'id_fasilitas'	=>$id_fasilitas,
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Edit File',
    		'fasilitas'   =>$this->m_fasilitas->detail($id_fasilitas),

            'isi' => 'admin/fasilitas/v_edit'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);

	}
	public function delete($id_fasilitas)
	{
		$fasilitas=$this->m_fasilitas->detail($id_fasilitas);
                       if ($fasilitas->foto !="") {
                       	unlink('./foto_fasilitas/'.$fasilitas->foto);
                       	# code...
                       }

                       $data = array(
                       	'id_fasilitas' => $id_fasilitas


                        );
                       $this->m_fasilitas->delete($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil DiHapus');
                       redirect('fasilitas');		





	}

}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/Fasilitas.php */