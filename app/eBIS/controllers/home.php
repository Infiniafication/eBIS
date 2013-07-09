<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('home.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */