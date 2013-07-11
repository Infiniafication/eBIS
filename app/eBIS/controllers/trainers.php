<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainers extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | Our Trainers -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('trainers.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file trainers.php */
/* Location: ./application/controllers/trainers.php */