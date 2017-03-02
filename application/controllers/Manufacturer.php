<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer extends CI_Controller {

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
	public function view()
	{
		$this->load->view('templates/meta');
		$this->load->view('templates/header');

		$this->load->model('model_manufacturer');
		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();
		$this->load->view('manufacturer',$data);

		$this->load->view('templates/footer-2');
	}

	public function client()
	{
		$this->load->view('templates/meta');
		$this->load->view('templates/header');

		$this->load->model('model_manufacturer');
		$data['client'] = $this->model_manufacturer->list_client()->result();
		$this->load->view('client',$data);

		$this->load->view('templates/footer-2');
	}

}
