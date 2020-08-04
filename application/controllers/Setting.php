<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_setting');
	}
		public function index()
	{
		
		 $data=array(
	            'title1' => 'SMPK ST. Yosefa',
    	        'title2' => 'Setting Tampilan ',
        	    'setting'	=> $this->m_setting->detail(),
            	'isi' =>    'admin/v_setting'
        );
     $this->load->view('admin/layout/v_wrapper',$data,FALSE); 
    

       
	}
	public function edit()
	{
		$this->form_validation->set_rules('kepala_sekolah', 'NIP', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']='./kep_sek/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $this->upload->initialize($config);
                 if ( !$this->upload->do_upload('foto_kepsek'))
                {


                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./kep_sek/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);
                       // menghapus File Foto  Lama /////
                       $setting=		$this->m_setting->detail();
                       if ($setting->foto_kepsek !="") {
                       	unlink('./kep_sek/'.$setting->foto_kepsek );
                       	# code...
                       }
                       ///end//

		                       $data=array(
		                       				'id'						=>1,
					                       	'nama_sekolah'				=> $this->input->post('nama_sekolah'),
					                       	'alamat'					=>$this->input->post('alamat'),
					                       	'no_telephone'				=>$this->input->post('no_telephone'),
					                       	'kepala_sekolah'			=>$this->input->post('kepala_sekolah'),
					                       	'foto_kepsek' 				=>$upload_data['uploads']['file_name']	,
					                       	'nip'						=>$this->input->post('nip'),
					                       	'visi'						=>$this->input->post('visi'),
											'misi'						=>$this->input->post('misi'),
											'sejarah'					=>$this->input->post('sejarah'),
												
					                       
		                       );

                       $this->m_setting->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil Disimpan');
                       redirect('setting');

                }	
                    $upload_data = array('uploads' => $this->upload->data());

                       $config['image_library']='gd2';
                       $config['source_image']='./kep_sek/'.$upload_data['uploads']['file_name'];
                       $this->load->library('image_lib', $config);
                       $this->load->library('upload', $config);

		                 
		                       				
		                       $data=array(
		                       				'id'						    =>1,
					                       	'nama_sekolah'					=> $this->input->post('nama_sekolah'),
					                       	'alamat'						=>$this->input->post('alamat'),
					                       	'no_telephone'					=>$this->input->post('no_telephone'),
					                       	'kepala_sekolah'				=>$this->input->post('kepala_sekolah'),
					                        'nip'							=>$this->input->post('nip'),
					                       	'visi'							=>$this->input->post('visi'),
											'misi'							=>$this->input->post('misi'),
											'sejarah'						=>$this->input->post('sejarah'),
												
					                       
		                       );

                       $this->m_setting->edit($data);
                       $this->session->set_flashdata('pesan', 'Data Guru Berhasil DiEdit');
                       redirect('setting');		

			
		}

                   	 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Data ekstrakulikuler',
    		'setting'   =>$this->m_setting->detail(),
            'isi' => 'admin/v_setting'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       

	}
	
}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */