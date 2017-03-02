<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->model('model_user');
		$this->load->model('model_insert');
		$this->agent->referrer();
	}
	
	public function index()
	{
		//set validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
     	$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
      	$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
		
		//validate form input
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('templates/meta');
			$this->load->view('templates/header');
			$this->load->view('contact');
			$this->load->view('templates/footer-2');
        }
		else
		{
				$name = $this->input->post('name');
	            $from_email = $this->input->post('email');
	            $subject = $this->input->post('subject');
	            $message = $this->input->post('message');
	            
				if ($this->model_user->sendEmail($name, $subject, $from_email, $message))
				{
					// successfully sent mail
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Thank you for contact us, we will reach you soon</div>');
					redirect('contact');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
					redirect('contact');
				}

		}
	}

	function verify($hash=NULL)
	{
		if ($this->model_user->verifyEmailID($hash))
		{
			$this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
			redirect('home');
		}
		else
		{
			$this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
			redirect('home');
		}
	}

	function input_subs() {
		$subs_email = $this->input->post('subs_email');
		$data = array(
			'subs_email' => $subs_email,
		);
		$result = $this->model_insert->insert($data,'subscriber_tbl');
		redirect($this->agent->referrer());
	}
}
