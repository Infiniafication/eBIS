<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS -';

		$this->load->helper('url');

		$this->data['link'] = array(
			array(
	          'href' => 'css/style.css',
	          'rel' => 'stylesheet',
	          'type' => 'text/css',
	          'media' => 'screen'
			)
		);

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('home.php', $this->data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */