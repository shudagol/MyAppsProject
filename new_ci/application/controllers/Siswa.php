<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
		$this->load->model('M_kelas');

		//Do your magic here
	}

	public function index()
	{
		$data['judul'] = "Menu Siswa";
		$data['data_siswa'] = $this->M_siswa->getsiswa();
		$this->load_template('siswa/home', $data);
	}

	public function add_siswa()
	{
		$data['judul'] = "Tambah Siswa";
		$data['kelas'] = $this->M_kelas->getKelas();
 		$this->load_template('siswa/tambah_siswa', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'required');


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			redirect('siswa/add_siswa');

		}else{

		$param = $this->input->post();
		$proses = $this->M_siswa->act_tambah($param);

		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Siswa Berhasil di Inputkan'));
			redirect('siswa');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Siswa gagal di Inputkan'));
			redirect('siswa/add_siswa');

		}
	}
}

	public function edit($id)
	{
		$data['judul'] = "Edit Siswa";
		$data['kelas'] = $this->M_kelas->getKelas();
		$data['data_siswa'] = $this->M_siswa->getDetailSiswa($id);

		$this->load_template('siswa/form_edit_siswa', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'required');


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			redirect('siswa/add_siswa');

		}else{

		$param = $this->input->post();
		$proses = $this->M_siswa->act_edit($param);


		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Siswa Berhasil di Edit'));
			redirect('siswa');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Siswa gagal di Edit'));
			redirect('HTTP_REFERER');

		}
	}
}


	public function hapus($id="")
	{
		$proses = $this->M_siswa->act_hapus($id);

		
		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Siswa Berhasil di Hapus'));
			
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Siswa gagal di Hapus'));

		}
		redirect('siswa');
	}

	
}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */