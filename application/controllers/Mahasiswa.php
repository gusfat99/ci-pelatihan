<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends Ci_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->library('form_validation');
		$this->load->model('Mahasiswa_Model');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->db->get('mahasiswa')->result_array();
		$this->db->order_by('nama','ASC');

		$data['title'] = "Mahasiswa";
		$this->load->view('templates/header',$data);
		$this->load->view('view_mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('npm', 'NPM', 'required|trim|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');


		if ($this->form_validation->run() == false) {
			$data['title'] = "Tambah Data Mahasiswa";
			$this->load->view('templates/header',$data);
			$this->load->view('view_tambahMahasiswa', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data <strong>Berhasil</strong> Ditambahkan!
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   		 <span aria-hidden="true">&times;</span>
		  		</button>
				</div>');

			$this->Mahasiswa_Model->tambah_data();
			redirect('mahasiswa');
		}
		
	}

	public function detail($id)
	{
		$data['mahasiswa'] = $this->Mahasiswa_Model->getById($id);
		$data['title'] = "Biodata Mahasiswa";
		$this->load->view('templates/header',$data);
		$this->load->view('view_detailMhs', $data);
		$this->load->view('templates/footer');
	}


	public function hapus($id)
	{	
		$this->session->set_flashdata('message', '<div class="alert 		alert-success alert-dismissible fade show" role="alert">
			Data <strong>Berhasil</strong> dihapus!
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	   		 <span aria-hidden="true">&times;</span>
	  		</button>
			</div>');

		$this->db->delete('mahasiswa',['id'=>$id]);
		redirect('mahasiswa','refresh');
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('npm', 'NPM', 'required|trim|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

		$id = $this->uri->segment(3);
		
		$data['mahasiswa']=$this->Mahasiswa_Model->getById($id);

		if ($this->form_validation->run() == false) {
			$data['title'] = "Ubah Data Mahasiswa";
			$this->load->view('templates/header',$data);
			$this->load->view('view_ubahMhs', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data <strong>Berhasil</strong> diubah!
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		   		 <span aria-hidden="true">&times;</span>
		  		</button>
				</div>');

			$this->Mahasiswa_Model->ubah_data();
			redirect('mahasiswa');
		}
		
	}

}