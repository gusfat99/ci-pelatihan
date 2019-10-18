<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_Model extends CI_Model {

	public function tambah_data()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'npm' => $this->input->post('npm'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'jurusan' => $this->input->post('jurusan'),
			'foto' => 'default.jpg'
		];

		//INSERT INTO mahasiswa values('', '')
		$this->db->insert('mahasiswa', $data);
	}

	public function getById($id)
	{
		return $this->db->get_where('mahasiswa',['id'=>$id])->row_array();
	}

	public function ubah_data()
	{
		$id = $this->input->post('id');
		$data = [
			'nama' => $this->input->post('nama'),
			'npm' => $this->input->post('npm'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'jurusan' => $this->input->post('jurusan'),
			'foto' => 'default.jpg'
		];

		//INSERT INTO mahasiswa values('', '')
		$this->db->where('id',$id);
		$this->db->update('mahasiswa', $data);
	}		

}

/* End of file Mahasiswa_Model.php */
/* Location: ./application/models/Mahasiswa_Model.php */