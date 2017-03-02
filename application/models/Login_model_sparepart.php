<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class login_model_sparepart extends CI_Model{

	function cek_login($email, $password){

		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('user_tbl');

	}	
}