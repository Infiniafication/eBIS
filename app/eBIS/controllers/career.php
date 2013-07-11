<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | Career -';

		$this->load->helper('url');

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('career.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}
}

/* End of file career.php */
/* Location: ./application/controllers/career.php */