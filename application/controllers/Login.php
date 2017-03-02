<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
	function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
	}

	function index(){
		$this->load->view('admin/v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek = $this->model_login->cek_login($username, $password);
		
			if($cek->num_rows()==1){
				foreach ($cek->result() as $data) {
					if($data->status == 1) {
						$sess_data['admin_id'] = $data->admin_id;
						$sess_data['username'] = $data->username;
						$sess_data['role_id'] = $data->role_id;
						$this->session->set_userdata($sess_data);
						redirect(base_url("admin"));		
					}
					else{
						
						$this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissable">
	                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                                                Maaf Account anda belum aktif
	                                            </div>');
						redirect(base_url("login"));
					}
					
				}

				

			}else{
				$this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissable">
	                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                                                Maaf username/password yang anda masukan salah.
	                                            </div>');
				redirect(base_url("login"));
			}
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


}
