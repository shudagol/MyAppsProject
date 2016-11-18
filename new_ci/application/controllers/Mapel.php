<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends Auth_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mapel');
		$this->load->model('M_guru');


		//Do your magic here
	}

	public function index()
	{
		$data['judul'] = "Menu Mata Pelajaran";
		$data['data_mapel'] = $this->M_mapel->getmapel();
		$this->load_template('mapel/home', $data);
	}

	public function add_mapel()
	{
		$data['judul'] = "Tambah Mapel";
		$data['guru'] = $this->M_guru->getGuru();
 		$this->load_template('mapel/tambah_mapel', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_mapel', 'Nama Matapelajaran', 'required');
		$this->form_validation->set_rules('id_guru', 'Guru', 'required');


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			redirect('mapel/add_mapel');

		}else{

		$param = $this->input->post();
		$proses = $this->M_mapel->act_tambah($param);

		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('mapel Berhasil di Inputkan'));
			redirect('mapel');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('mapel gagal di Inputkan'));
			redirect('siswa/add_mapel');

		}
	}
}


	public function edit($id)
	{
		$data['judul'] = "Edit Mapel";
		$data['guru'] = $this->M_guru->getGuru();
		$data['data_mapel'] = $this->M_mapel->getDetailmapel($id);

		$this->load_template('mapel/form_edit_mapel', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'required');
		$this->form_validation->set_rules('id_guru', 'guru', 'required');


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			redirect('HTTP_REFERER');

		}else{

		$param = $this->input->post();
		$proses = $this->M_mapel->act_edit($param);


		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Mapel Berhasil di Edit'));
			redirect('mapel');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Mapel gagal di Edit'));
			redirect('HTTP_REFERER');

		}
	}
}

}

/* End of file Mapel.php */
/* Location: ./application/Mapel.php */