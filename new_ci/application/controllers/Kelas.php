<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelas extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kelas');

		//Do your magic here
	}

	public function index()
	{
		$data['judul'] = "Menu kelas";
		$data['data_kelas'] = $this->M_kelas->getkelas();
		$this->load_template('kelas/home', $data);
	}

	public function add_kelas()
	{
		$data['judul'] = "Tambah kelas";
 		$this->load_template('kelas/tambah_kelas', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama kelas', 'required');


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			redirect('kelas/add_kelas');

		}else{

		$param = $this->input->post();
		$proses = $this->M_kelas->act_tambah($param);

		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('kelas Berhasil di Inputkan'));
			redirect('kelas');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('kelas gagal di Inputkan'));
			redirect('kelas/add_kelas');

		}
	}
}


	public function edit($id)
	{
		$data['judul'] = "Edit kelas";
		$data['data_kelas'] = $this->M_kelas->getDetailkelas($id);

		$this->load_template('kelas/form_edit_kelas', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama', 'required');
		


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			redirect('kelas/add_kelas');

		}else{

		$param = $this->input->post();
		$proses = $this->M_kelas->act_edit($param);


		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Kelas Berhasil di Edit'));
			redirect('kelas');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Kelas gagal di Edit'));
			redirect('HTTP_REFERER');

		}
	}
}


public function hapus($id="")
	{
		$proses = $this->M_kelas->act_hapus($id);

		
		if (proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Kelas Berhasil di Hapus'));
			
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Kelas gagal di Hapus'));

		}
		redirect('kelas');
	}

}

/* End of file kelas.php */
/* Location: ./application/controllers/kelas.php */