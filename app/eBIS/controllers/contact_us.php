<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | Contact Us -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('contact_us.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file contact_us.php */
/* Location: ./application/controllers/contact_us.php */