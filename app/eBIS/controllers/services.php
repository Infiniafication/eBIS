<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | Our Services -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('services.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file services.php */
/* Location: ./application/controllers/services.php */