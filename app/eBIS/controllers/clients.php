<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | Our Clients -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('clients.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file clients.php */
/* Location: ./application/controllers/clients.php */