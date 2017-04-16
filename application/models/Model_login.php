<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class model_login extends CI_Model{

	function cek_login($username, $password){

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin_tbl');

	}	

	function cek_login_costumer($email, $password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('user_tbl');

	}	
}