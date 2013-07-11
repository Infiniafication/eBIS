<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | About Us -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('about_us.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */