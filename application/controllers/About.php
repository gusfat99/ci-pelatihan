<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = "About Me";
		$this->load->view('templates/header',$data);
		$this->load->view('About_v');
		$this->load->view('templates/footer');
	
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */ ?>