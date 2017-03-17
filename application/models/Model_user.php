<?php
class model_user extends CI_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
         $this->load->helper(array('form','url'));
      	 $this->load->library(array('session', 'form_validation', 'email'));
        	
    }
	
	//send verification email to user's email id
	function sendEmail($name, $subject, $from_email, $message)
	{
		$to_email = 'fadil.hakim182@gmail.com';
		/*$subject = 'Verify Your Email Address'; */
		$messages = 'Dear Admin Besha Analitika, You get message from :'.$name.'&nbsp;&nbsp;'.$from_email.'<br>'.$message;
		
		//configure email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
		$config['smtp_port'] = '465'; //smtp port number
		$config['smtp_user'] = $to_email;
		$config['smtp_pass'] = 'bismilah1'; //$from_email password
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes
		$this->email->initialize($config);
		//send mail
		$this->email->to($to_email);
		$this->email->from($from_email , $name);
		$this->email->subject($subject);
		$this->email->message($messages);
		return $this->email->send();
	}
	
	//activate user account
	function verifyEmailID($key)
	{
		$data = array('act_status' => 1);
		$this->db->where('md5(email)', $key);
		return $this->db->update('user_tbl', $data);
	}

	//send verification to email admin id
	function sendEmailAdmin($to_email,$username)
	{
		
		$from_email = 'zuhaidisaleh99@gmail.com';
		$subject = 'Verify Your Email Address';
		$message = 'Dear Admin Besha Analitika,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.besha-analitika.co.id/login/verify/admin/'.$username.'<br /><br /><br />Thanks<br />';
		
		//configure email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
		$config['smtp_port'] = '465'; //smtp port number
		$config['smtp_user'] = $from_email;
		$config['smtp_pass'] = 'serena99'; //$from_email password
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes
		$this->email->initialize($config);
		
		//send mail
		$this->email->from($from_email, 'Besha Analitika');
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);
		return $this->email->send();
	}

	function verifyEmailAdmin($key)
	{
		$data = array('status' => 1);
		$this->db->where('md5(email)', $key);
		return $this->db->update('admin_tbl', $data);
	}
	

	function list_users(){
		$stock = $this->db->get('admin_tbl');
		return $stock->result();
	}
}