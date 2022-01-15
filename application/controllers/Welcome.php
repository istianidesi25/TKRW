<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}
	
	 public function index()
	{
		$recordMhs = $this->M_Mahasiswa->getDataMahasiswa();
		$DATA = array('data_mhs' => $recordMhs);
		$this->load->view('home', $DATA);
	}

	public function formInput(){
		$this->load->view('form_input');
	}

	public function formEdit($id){
		$recordMhs = $this->M_Mahasiswa->getDataMahasiswaDetail($id);
		$DATA = array('data_mhs' => $recordMhs);
		$this->load->view('form_edit',);
	}

	public function AksiInsert(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		
		$DataInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan,
		);
		
		$this->M_Mahasiswa->InsertDataMhs($DataInsert);
		redirect(base_url('Welcome'));
	}


}  
