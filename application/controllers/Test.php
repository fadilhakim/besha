<?php



	class Test extends CI_Controller{

		

		

		function __construct()

		{

			parent::__construct();	

		}

		

		function index()

		{

			echo "<form method='post'

			 action='".base_url("test/process")."' enctype='multipart/form-data'> 

					

					<input type='file' name='file' >

					

					

					<input type='submit'>

				</form>	

			";	

			

		}

		

		function ci_process()

		{

			error_reporting(E_ALL);

			

			  $config['upload_path']          = 'assets/image';

			  $config['allowed_types']        = 'gif|jpg|png';

			  //$config['max_size']             = 100;

			  //$config['max_width']            = 1024;

			  //$config['max_height']           = 768;

  

			  $this->load->library('upload', $config);

  			  

			  $a = $this->upload->do_upload('file');

			   

			   exit("test");

			  

			  if ( !$a )

			  {

					  $error = array('error' => $this->upload->display_errors());

  					  

					  print_r($error);

					  

					  //$this->load->view('upload_form', $error);

			  }

			  else

			  {

					  $data = array('upload_data' => $this->upload->data());

  					  print_r($data);

					  //$this->load->view('upload_success', $data);

			  }

			

		}

		

		function process()

		{

			error_reporting(E_ALL);

			

			$file_name = $_FILES["file"]["name"];

			$tmp_name = $_FILES["file"]["tmp_name"];

			$file_type = $_FILES["file"]["type"];

			

			print_r($_FILES);

			

			$a = move_uploaded_file($tmp_name,"assets/image/aneh.png");	

			var_dump($a);

		}

		

		function send_email_bro()

		{

			//error_reporting(E_ALL);



			$this->load->library("MY_Email2");

	

			$content = array(



				"subject" 		=> "welcome Besha-analitika.co.id",



				"subject_title"  => "besha-analitika.co.id",



				"to" 			 => "alhusna901@gmail.com",



				"message" 		=> " untuk awal dia masuk spam, tp, kenapa usernya jadi fromnya Root User <root@localhost> ? harusnya dari test@besha-analitika.com",



				"mv" 			=> FALSE



			);  



			$user = "fadil182_gmail";



			// $this->load->view($content["message"],$dtt);



			$this->my_email2->send_email($user,$content);



			echo $this->my_email2->get_email_message();

		}

		

		function send_email_lagi2()

		{

			$this->load->library('email');

			

			/*$config['protocol'] = 'smtp';

			//$config['mailpath'] = '/usr/sbin/sendmail';

			//config['charset'] = 'iso-8859-1';

			$config['wordwrap'] = TRUE;

			$config['smtp_host'] = 'mail.besha-analitika.co.id';

			$config['smtp_port'] = 25;

			$config['smtp_user'] = 'test@besha-analitika.co.id';

			$config['smtp_pass'] = 'coolmangenius99';*/

			

			/* $config['protocol']  = 'smtp';

			$config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name

			$config['smtp_port'] = '465'; //smtp port number

			$config['smtp_user'] = "webbeshaanalitika@gmail.com";

			$config['smtp_pass'] = 'admbesha'; //$from_email password*/
			
			$config = array();
			$config['protocol']  = 'smtp';
			$config['mailtype']  = 'html';
			$config['priority']  = '1';
			$config['wordwrap']  = FALSE;
			$config['smtp_host'] = 'ssl://besha-analitika.co.id';
			$config['smtp_port'] = 465;
			$config['smtp_user'] = 'test@besha-analitika.co.id';
			$config['smtp_pass'] = 'coolmangenius99';

			

			$this->email->initialize($config);



			$this->email->from('ariesdimasy@gmail.com', 'Dimas');

			$this->email->to($config['smtp_user']);

			

			

			$this->email->subject('Email Test');

			$this->email->message('Testing the email class.');

			

			$a = $this->email->send();	

			

			echo $pr = $this->email->print_debugger();

			

			var_dump($a);

		}

		

		function send_email_lagi()

		{

			
			$config['protocol']  = 'smtp';
			$config['mailtype']  = 'html';
			$config['priority']  = '1';
			$config['wordwrap']  = FALSE;
			$config['smtp_host'] = 'ssl://besha-analitika.co.id';
			$config['smtp_port'] = 465;
			$config['smtp_user'] = 'test@besha-analitika.co.id';
			$config['smtp_pass'] = 'coolmangenius99';

			

			$this->email->initialize($config);



			$this->email->from($config['smtp_user'], 'Dimas');

			$this->email->to("alhusna901@gmail.com");

			

			

			$this->email->subject('Email Test');

			$this->email->message('Testing the email class.');

			

			$a = $this->email->send();	

			

			echo $pr = $this->email->print_debugger();

			

			var_dump($a);


		}

	}