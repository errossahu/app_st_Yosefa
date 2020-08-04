<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	$this->load->model('m_siswa');
	}
	public function index()
	{
			 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data Siswa',
            'siswa' =>$this->m_siswa->lists(),
            'isi' => 'admin/siswa/v_list'

        );
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE); 
	}
	public function kelas_9()
	{
		 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data Siswa',
            'siswa' =>$this->m_siswa->kelas_9(),
            'isi' => 'admin/siswa/v_list_kelas9'

        );
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE); 
	}
	public function kelas_8()
	{
		 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data Siswa',
            'siswa' =>$this->m_siswa->kelas_8(),
            'isi' => 'admin/siswa/v_list_kelas8'

        );
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE); 
	}
	public function kelas_7()
	{
		 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data Siswa',
            'siswa' =>$this->m_siswa->kelas_7(),
            'isi' => 'admin/siswa/v_list_kelas7'

        );
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE); 
	}
	public function add()
	{
	$this->form_validation->set_rules('nis', 'NIP', 'required');
	$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
	$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
	$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
	$this->form_validation->set_rules('kelas', 'Kelas', 'required');
	$this->form_validation->set_rules('agama', 'agama', 'required');

	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./foto_siswa/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('foto_siswa'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah Siswa',
	            		'error'	 => $this->upload->display_errors(),
	    
	            		'isi'    => 'admin/siswa/v_add'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else 
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./foto_siswa/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

		                       $data=array(
					                       	'nis'			=> $this->input->post('nis'),
					                       	'nama_siswa'		=>$this->input->post('nama_siswa'),
					                       	'tempat_lahir'	=>$this->input->post('tempat_lahir'),
					                       	'tgl_lahir'		=>$this->input->post('tgl_lahir'),
					                       	'kelas'		=>$this->input->post('kelas'),
					                       	'agama'	=>$this->input->post('agama'),
					                       	'foto_siswa' 			=>$upload_data['uploads']['file_name']
		                       );

                       $this->m_siswa->add($data);
                       $this->session->set_flashdata('pesan', 'Data Siswa Berhasil Disimpan');
                       redirect('siswa');

                }			

			
		}
                   	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Tambah Siswa',
	            		'mapel'  => $this->m_siswa->lists(),	
	            		'isi'    => 'admin/siswa/v_add'
	            	);
                   	 $this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}
	public function edit($id_siswa)
	{
		$this->form_validation->set_rules('nis', 'NIs', 'required');
	$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
	$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
	$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
	$this->form_validation->set_rules('kelas', 'Kelas', 'required');
	$this->form_validation->set_rules('agama', 'Pendidikan', 'required');
	// $this->form_validation->set_rules('foto', 'Foto Guru', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./foto_siswa/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('foto_siswa'))
                {
                    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Edit Siswa',
	            		'error'	 => $this->upload->display_errors(),

	            		'guru'  => $this->m_siswa->detail($id_siswa),	
	            		'isi'    => 'admin/siswa/v_edit'

       				 );
   			  			$this->load->view('admin/layout/v_wrapper',$data,FALSE); 
						echo("ERROR BANGSAAT");
                     
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./foto_siswa/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);
                       // menghapus File Foto  Lama /////
                       $guru=$this->m_siswa->detail($id_siswa);
                       if ($siswa->foto_siswa !="") {
                       	unlink('./foto_siswa/'.$siswa->foto_siswa);
                       	# code...
                       }
                       ///end//

		                       $data=array(
		                       				'id_siswa'		=>$id_siswa,
					                       	'nis'			=> $this->input->post('nis'),
					                       	'nama_siswa'		=>$this->input->post('nama_siswa'),
					                       	'tempat_lahir'	=>$this->input->post('tempat_lahir'),
					                       	'tgl_lahir'		=>$this->input->post('tgl_lahir'),
					                       	'kelas'		=>$this->input->post('kelas'),
					                       	'agama'	=>$this->input->post('agama'),
					                       	'foto_siswa' 			=>$upload_data['uploads']['file_name']
		                       );

                       $this->m_siswa->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('siswa');

                }	
                    $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./foto_siswa/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

		                       $data=array(
		                       				'id_siswa'		=>$id_siswa,
					                       	'nis'			=> $this->input->post('nis'),
					                       	'nama_siswa'		=>$this->input->post('nama_siswa'),
					                       	'tempat_lahir'	=>$this->input->post('tempat_lahir'),
					                       	'tgl_lahir'		=>$this->input->post('tgl_lahir'),
					                       	'kelas'		=>$this->input->post('kelas'),
					                       	'agama'	=>$this->input->post('agama'),
					                       
		                       );

                       $this->m_siswa->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil DiEdit');
                       redirect('siswa');		

			
		}

    	 $data=array(
	            		'title1' => 'Sekolah St. Yosefa',	
	            		'title2' =>'Edit Siswa',
		
	            		'siswa'  => $this->m_siswa->detail($id_siswa),	
	            		'isi'    => 'admin/siswa/v_edit'
	            	);
                   	 $this->load->view('admin/layout/v_wrapper', $data, FALSE);

	}
	public function delete($id_siswa)
	{
				  $siswa=$this->m_siswa->detail($id_siswa);
                       if ($siswa->foto_siswa !="") {
                       	unlink('./foto_siswa/'.$siswa->foto_siswa);
                       	# code...
                       }

                       $data = array('id_siswa' => $id_siswa


                        );
                       $this->m_siswa->delete($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil DiHapus');
                       redirect('siswa');		


	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */