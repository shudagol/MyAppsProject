<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_nilai');
		$this->load->model('M_siswa');
		$this->load->model('M_mapel');



		//Do your magic here
	}

	public function index()
	{
	
		$data['judul'] = "Menu Nilai";
		$data['data_nilai'] = $this->M_nilai->getnilai();
		$this->load_template('nilai/home', $data);
	}

	public function add_nilai()
	{
		$data['judul'] = "Tambah Nilai";
		$data['siswa'] = $this->M_siswa->getsiswa();
		$data['mapel'] = $this->M_mapel->getmapel();

 		$this->load_template('nilai/tambah_nilai', $data);
	}


	public function act_tambah()
	{
		$this->form_validation->set_rules('id_siswa', 'Nama Siswa', 'required');
		$this->form_validation->set_rules('id_mapel', 'Mata Pelajara', 'required');
		$this->form_validation->set_rules('total_nilai', 'Nilai', 'required');


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			redirect('nilai/add_nilai');

		}else{

		$param = $this->input->post();
		$proses = $this->M_nilai->act_tambah($param);

		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Nilai Berhasil di Inputkan'));
			redirect('nilai');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Nilai gagal di Inputkan'));
			redirect('nilai/add_nilai');

		}
	}
}

	public function edit($id)
	{
		$data['judul'] = "Edit Nilai";
		$data['siswa'] = $this->M_siswa->getsiswa();
		$data['mapel'] = $this->M_mapel->getmapel();
		$data['data_nilai'] = $this->M_nilai->getDetailNilai($id);

		$this->load_template('nilai/form_edit_nilai', $data);
	}


	public function act_edit()
	{
		$this->form_validation->set_rules('id_siswa', 'Nama Siswa', 'required');
		$this->form_validation->set_rules('id_mapel', 'Mata Pelajara', 'required');
		$this->form_validation->set_rules('total_nilai', 'Nilai', 'required');


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			redirect('nilai/add_nilai');

		}else{

		$param = $this->input->post();
		$proses = $this->M_nilai->act_edit($param);


		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Nilai Berhasil di Edit'));
			redirect('nilai');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Nilai gagal di Edit'));
			redirect('HTTP_REFERER');

		}
	}
}


	public function hapus($id="")
	{
		$proses = $this->M_nilai->act_hapus($id);

		
		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Nilai Berhasil di Hapus'));
			
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Nilai gagal di Hapus'));

		}
		redirect('nilai');
	}

}

/* End of file Nilai.php */
/* Location: ./application/controllers/Nilai.php */