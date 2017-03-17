<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin_users extends CI_Controller {

	public function verify()

	{

		$this->load->view('admin/v_new_password');

	}



	public function verify_submit()

	{

		$username=$this->input->post('username');

		$this->load->library(array('session', 'form_validation', 'email'));

		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');

		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');

		if ($this->form_validation->run() == FALSE){

			$this->session->set_flashdata('error','<div class="alert alert-danger text-center">New Password dengan Confirm Password harus sama</div>');

			redirect('login/verify/admin/'.$username);

		} else {

			$data = array( 

					'password' => $this->input->post('password'),

					'status' => 1

			);



			$this->load->model('model_insert');

			$this->model_insert->insertByUsername($data,$username);

			$this->session->set_flashdata('error','<div class="alert alert-success text-center">Selamat Akun anda sudah aktif, Silahkan Login</div>');

			redirect('login');

		}

	}

}