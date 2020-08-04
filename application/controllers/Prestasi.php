<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_prestasi');
	}
	public function index()
	{
				 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Prestasi',
            'prestasi'=>$this->m_prestasi->lists(),
            'isi' => 'admin/prestasi/v_lists'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       
	

		
	}
	public function add()
	{
		$this->form_validation->set_rules('nama_prestasi', 'Nama Prestasi', 'required');
		if ($this->form_validation->run() ==  FALSE) {
			# code...
		} else {
				$data = array(
			'nama_prestasi' => $this->input->post('nama_prestasi'), 
			'tingkat'=>$this->input->post('tingkat'),
			'siswa'=>$this->input->post('siswa')

			);
			$this->m_prestasi->add($data);
		$this->session->flashdata('pesan','Data Berhasil Ditambahkan');
		redirect('prestasi'); 

			
			# code...
		}


	 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Prestasi',
          
            'isi' => 'admin/prestasi/v_add'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);


		 
	}
	public function edit($id_prestasi)
	{
		$this->form_validation->set_rules('nama_prestasi', 'Nama Prestasi', 'required');
		if ($this->form_validation->run() ==  FALSE) {
			# code...
		} else {
				$data = array(
					'id_prestasi'=>$id_prestasi,
			'nama_prestasi' => $this->input->post('nama_prestasi'), 
			'tingkat'=>$this->input->post('tingkat'),
			'siswa'=>$this->input->post('siswa')

			);
			$this->m_prestasi->edit($data);
			$this->session->flashdata('pesan','Data Berhasil Ditambahkan');
			redirect('prestasi'); 

			
			# code...
		}


	 $data=array(
            'title1' => 'Sekolah St. Yosefa',	
            'title2'=>'Prestasi',
          	'prestasi'=>$this->m_prestasi->detailprestasi($id_prestasi),
            'isi' => 'admin/prestasi/v_edit'

        );	
		  $this->load->view('admin/layout/v_wrapper',$data,FALSE);

	}

}

/* End of file Prestasi.php */
/* Location: ./application/controllers/Prestasi.php */