<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | Facebook -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('facebook.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file facebook.php */
/* Location: ./application/controllers/facebook.php */