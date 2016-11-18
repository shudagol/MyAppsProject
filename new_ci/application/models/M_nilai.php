<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model {


	public function getnilai(){
		$this->db->select('nilai.*, mapel.nama_mapel, siswa.nama');
		$this->db->from('nilai');
		$this->db->join('siswa', 'siswa.id = nilai.id_siswa', 'left');
		$this->db->join('mapel', 'mapel.id_mapel = nilai.id_mapel', 'left');

		$data = $this->db->get();
		// $data = $this->db->get('siswa');
		return $data->result();
	}


	public function act_tambah($param){

		$this->db->insert('nilai', $param);

		return $this->db->affected_rows();
	}

	public function getDetailNilai($id){

		$this->db->where('id_nilai', $id);
		$data = $this->db->get('nilai');

		return $data->row();
	}


		public function act_edit($param){
		$object= [
			'id_siswa' => $param['id_siswa'],
			'id_mapel' => $param['id_mapel'],
			'total_nilai' => $param['total_nilai'],

		];

		$this->db->where('id_nilai', $param['id']);
		$this->db->update('nilai', $object);

		return $this->db->affected_rows();
	}




	public function act_hapus($id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->delete('nilai');
		return $this->db->affected_rows();
		
	}

	

}

/* End of file M_nilai.php */
/* Location: ./application/models/M_nilai.php */