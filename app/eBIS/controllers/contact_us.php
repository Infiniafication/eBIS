<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends MY_Controller {

	public function index()
	{
		$this->data['title'] = '- EBIS | Contact Us -';

		$this->data['alert'] = "";

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
				      <input type="checkbox" name="cc" value="cc" />Send a copy of email to yourself
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
		$this->load->library('phpmailer');


		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$title = $this->input->post('title');
		$message = $this->input->post('message', TRUE);
		$cc = $this->input->post('cc');

		$mail = $this->phpmailer;
		//Tell PHPMailer to use SMTP
		$mail->IsSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug  = 0;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host       = "mail.ebiscentre.com";
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port       = 25;
		//Whether to use SMTP authentication
		$mail->SMTPAuth   = true;
		//Username to use for SMTP authentication
		$mail->Username   = "admin@ebiscentre.com";
		//Password to use for SMTP authentication
		$mail->Password   = "eCen&7712";
		//Set who the message is to be sent from
		$mail->SetFrom($email, $name);
		//Set an alternative reply-to address
		// $mail->AddReplyTo('replyto@example.com','First Last');
		//Set who the message is to be sent to
		$mail->AddAddress('admin@ebiscentre.com', 'Admin');

		if ($cc) {
			$mail->AddCC($email, $name);
		}

		//Set the subject line
		$mail->Subject = $title;
		//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
		$mail->MsgHTML($message);

		//Send the message, check for errors. send() Returns false if fail
		$this->_showAlertBox($mail->Send());
	}

	private function _showAlertBox($success)
	{
		if ($success)
		{
			$this->data['alert'] = 
			'<div class="row">
				<div class="alert alert-success span5">
			    	<button type="button" class="close" data-dismiss="alert">&times;</button>
			    		<strong>Success!</strong> Enquiry sent. 
				</div>
			</div>';
		}
		else
		{
			$this->data['alert'] =
			'<div class="row">
				<div class="alert alert-error span5">
		    		<button type="button" class="close" data-dismiss="alert">&times;</button>
		    			<strong>Oh snap!</strong> An error occured. Please try submitting again. 
		    		</div>
			 </div>';
		}		
	}
}

/* End of file contact_us.php */
/* Location: ./application/controllers/contact_us.php */