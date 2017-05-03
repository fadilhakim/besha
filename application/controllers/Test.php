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

		function send_email_lagi()
		{
			error_reporting(E_ALL);
			$this->load->model("model_user");

			$aa = $this->model_user->sendEmail("dimas","test","alhusna901@gmail.com","Welcome Bro");
			//$aa = $this->model_user->sendEmail2("alhusna901@gmail.com","alhusna901");
			//$kk = $this->model_user->sendEmailAdmin("alhusna901@gmail.com","alhusna901");
			var_dump($aa);
		}

		function view_session()
		{
			print_r($this->session->all_userdata());
		}
	}
