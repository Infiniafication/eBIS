<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->data['link'] = array(
			array(
	          'href' => 'css/bootstrap.min.css',
	          'rel' => 'stylesheet',
	          'type' => 'text/css',
	          'media' => 'screen'
			),
				array(
	          'href' => 'css/default.css',
	          'rel' => 'stylesheet',
	          'type' => 'text/css',
	          'media' => 'screen'
			)
		);
	}
}

// END MY_Controller class

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */