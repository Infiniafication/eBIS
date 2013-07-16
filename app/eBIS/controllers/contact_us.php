<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | Contact Us -';

		$this->load->helper('url');

		if ($this->input->post('submit')) {
			$this->_processForm();
		}

		$this->data['form'] = $this->_generateForm();

		$this->load->view('templates/head.php', $this->data);
		$this->load->view('templates/navbar.php', $this->data);
		$this->load->view('contact_us.php', $this->data);
		$this->load->view('templates/foot.php', $this->data);
	}

	private function _generateForm()
	{
		$this->load->helper('form');

		$form = "";

		$form .= form_open('contact_us');
		$form .= form_fieldset('<h2>Submit an enquiry</h2>');
		$form .= form_label('Name', 'name');
		$attributes = array(
			'placeholder' => 'Your Name',
			'name' => 'name',
			'id' => 'name',
			'class' => 'input-xlarge',
			'required' => ''
			);
		$form .= form_input($attributes);
		$form .= form_label('Email', 'email');
		$attributes = array(
			'type' => 'email',
			'placeholder' => 'Your Email',
			'name' => 'email',
			'id' => 'email',
			'class' => 'input-xlarge',
			'required' => ''
			);
		$form .= form_input($attributes);
		$form .= form_label('Subject', 'title');
		$attributes = array(
			'placeholder' => 'Subject Title',
			'name' => 'title',
			'id' => 'title',
			'class' => 'input-xlarge',
			'required' => ''
			);
		$form .= form_input($attributes);
		$form .= form_label('Message', 'message');
		$attributes = array(
			'name' => 'message',
			'id' => 'message',
			'class' => 'input-xlarge',
			'required' => ''
			);
		$form .= form_textarea($attributes);
		$form .= '<br/><span class="label label-info tip">Tip: Text area can be resized using the bottom right corner.</span>';
		
		$attributes = array(
			'value' => 'cc',
			'name' => 'cc'
			);

		$checkbox = '<label class="checkbox">
				      <input type="checkbox" value="cc" />Send a copy of email to yourself
				    </label>';
		$form .= form_label($checkbox, 'cc', array('class' => 'checkbox'));
		$form .= form_submit('submit', 'Submit Enquiry', 'class="btn btn-large btn-primary submit"');
		$form .= nbs(2);
		$form .= form_reset('clear', 'Clear Form', 'class="btn btn-large"');
		$form .= form_fieldset_close();
		$form .= form_close();

		return $form;
	}

	private function _processForm()
	{
		$this->load->library('email');


		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$title = $this->input->post('title');
		$message = $this->input->post('message', TRUE);
		$cc = $this->input->post('cc');

		$to = 'admin@wtc-intl.com';

		$this->email->from($email);
		$this->email->to($to);

		if ($cc) {			
			$this->email->cc($cc);
		}

		$this->email->subject($title);
		$this->email->message($message);

		$this->email->send();
	}
}

/* End of file contact_us.php */
/* Location: ./application/controllers/contact_us.php */