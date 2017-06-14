<?php

	class Authentification{
		
		function __construct()
		{
			
		}
		
		function logged_in()
		{
			// harus sudah login
			
			$CI =& get_instance();
			
			$user_sess = $CI->session->userdata("user_id");
			
			if(empty($user_sess))
			{
				
				redirect(base_url("login/login_customer"));
				exit;
			}
			
		}
		
		function logged_out()
		{
			// harus sudah logout
			
			$CI =& get_instance();
			
			$user_sess = $CI->session->userdata("user_id");
			
			
			if(!empty($user_sess))
			{
				redirect(base_url());
				exit;
				
			}
			
		}
		
	}