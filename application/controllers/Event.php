<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

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
		
		$this->load->model('model_event');
		$this->load->model('model_news');
		$data['event'] = $this->model_event->list_event()->result();
		$data['news'] = $this->model_news->list_news()->result();

		$this->load->view('event',$data);
		$this->load->view('templates/footer-2');
	}

	public function detail()
	{

		
		$this->load->view('templates/meta');
		$this->load->view('templates/header');

		$id_event=$this->uri->segment(3);
		$page = 'detail_event';


		$this->load->model('model_event');
		$event = $this->model_event->getEventById($id_event);
		$data['event'] = $event;

		$this->load->view($page, $data);
		$this->load->view('templates/footer-2');
	}

	public function detail_news()
	{

		
		$this->load->view('templates/meta');
		$this->load->view('templates/header');

		$id_news=$this->uri->segment(3);
		$page = 'detail_news';


		$this->load->model('model_news');
		$news = $this->model_news->getnewsById($id_news);
		$data['news'] = $news;

		$this->load->view($page, $data);
		$this->load->view('templates/footer-2');
	}

}
