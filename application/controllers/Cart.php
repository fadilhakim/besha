<?php

class cart extends CI_Controller { // Our Cart class extends the Controller class

    public function __construct(){
		
      parent::__construct();
      $this->load->library('cart');
   	  $this->load->model('model_cart');
	  $this->load->helper("check_data");
	  $this->load->model("model_user");

  	}

	function add_cart_item(){

	   $getrow['getcart'] = $this->model_cart->validate_add_cart_item();
	   
	    if(count($getrow['getcart']) > 0){

	     	$id = $this->input->post('sparepart_id');

	     	$price = $this->input->post('sparepart_price');
			
	     	$cty = $this->input->post('quantity');

	     	$image = $this->input->post('sparepart_image');

	     	$name = $this->input->post('sparepart_name');
			
	     	$manu = $this->input->post('sparepart_manufacturer');
			
	     	$code = $this->input->post('sparepart_code');
			
	     	$id_ajak = $this->input->post('ajax');

	    	foreach ($getrow['getcart'] as $row)
	        {

	            // Create an array with product information

	            $data = array(

			        'id'      => $id,
			        'qty'     => $cty,
			        'price'   => $price,
			        'name'    => $name,
			        'image'   => $image,
			        'code' => $code,
			        'manu' => $manu

			        /*'options' => array('image' => $image , 'code' => $sparepart_code , 'manu' => $manu)*/
			);


	            // Add the data to the cart using the insert function that is available because we loaded the cart library


	            $this->cart->insert($data);

	            redirect($this->agent->referrer());

	        }

	        /* $i = 1;
	         foreach($this->cart->contents() as $items);
	        echo  $items['sparepart_name'];
	        die();*/

	    } else{

	        // Nothing found! Return FALSE! 

	        return FALSE;

	    }

	}

	function show_cart(){

		
		$this->load->library("rajaongkir");
		$this->load->model('model_sparepart');
		
		$user_id = $this->session->userdata("user_id");		
		$province = $this->rajaongkir->show_province();
		$json_decode = json_decode($province,TRUE);
		
		$data["address_book"] = $this->model_user->address_book_list($user_id);
		$data["province"] = $json_decode["rajaongkir"]["results"];
		
		

		$this->load->view('templates/meta_sparepart');

		$this->load->view('templates/header_sparepart');

    	$this->load->view('sparepart/v_cart',$data);

    	$this->load->view('templates/footer_sparepart');

	}

	function update_cart(){

		// Get the total number of items in cart

	    $total = count($this->cart->contents());

	    // Retrieve the posted information

	    $item = $this->input->post('rowid');

	    $qty = $this->input->post('qty');

	 	/*echo $qty;
	 	die();*/
	    // Cycle true all items and update them

	    for($i=0;$i < $total;$i++)
	    {

	        // Create an array with the products rowid's and quantities. 

	        $data = array(

	           'rowid' => $item[$i],
	           'qty'   => $qty[$i]

	        );

	        //echo $item[$i];

	        // Update the cart with the new information

	        $this->cart->update($data);

	    }

	    /*$this->model_cart->validate_update_cart();*/
	    redirect($this->agent->referrer());

	}

	function removeCartItem() {

		$rowid=$this->uri->segment(3);

        $data = array(

            'rowid'   => $rowid,
            'qty'     => 0

        );

        $this->cart->update($data);

        redirect($this->agent->referrer());

	}

	function empty_cart(){

    	$this->cart->destroy(); // Destroy all cart data

    	redirect('spareparts/all'); // Refresh te page

	}

	function save_invoice()
	{

		// database	
	}

	function print_invoice()
	{



		$this->load->model("model_user");

		$this->load->model("model_sparepart");

		$this->load->library("M_Pdf");

		$user_session = $this->session->all_userdata();	

		$dt_stat = "error";

		$dt_msg  = '<div class="alert alert-danger alert-dismissable">

						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

						Silakan login terlebih dahulu

					</div>';

		if(empty($user_session["email"]))
		{

			$this->session->set_flashdata($dt_stat,$dt_msg);

			redirect(base_url("cart/show_cart"));
	

		}

		else

		{

			$cart = $this->cart->contents();

			$date = date("d-m-Y"); 

			$name_pdf = "Besha invoice $date.pdf";

			$data["name_pdf"] = $name_pdf;

			//print_r($cart);

			//$html =  $this->load->view("invoice/invoice-page",$data,true); 

			$html = $this->load->view("invoice/invoice-fancy-page",$data,true);

			$this->m_pdf->generate_pdf($html, "Besha invoice $date.pdf");

		}

	}

	function send_email_invoice()
	{



		$this->load->model("model_user");

		$this->load->model("model_sparepart");

		$user_session = $this->session->all_userdata();

		

		//print_r($user_session); exit;

		$dt_stat = "error";

		$dt_msg  = '<div class="alert alert-danger alert-dismissable">

						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

						Silakan login terlebih dahulu

					</div>';

		//$dt_msg = "Silahkan login Terlebih dahulu";

		

		if(empty($user_session["email"]))
		{
			$this->session->set_flashdata($dt_stat,$dt_msg);

			redirect(base_url("cart/show_cart"));
		}
		else
		{

			$date = date("d-m-Y"); 
			$name_pdf = "Besha invoice $date.pdf";
			$data["user_sess"] = $user_session;
			$data["name_pdf"] = $name_pdf;

			$html =  $this->load->view("invoice/invoice-fancy-page-inline",$data,true); 

			$from_email = "info@besha-analitika.co.id";
			
			$to_email = $user_session["email"];

			$subject = "$name_pdf";

			$message = $html;
			
			$config['protocol']  = 'smtp';
			$config['mailtype']  = 'html';
			$config['priority']  = '1';
			$config['charset']   = 'iso-8859-1';
			$config['newline']   = "\r\n"; //use double quotes*/
			$config['wordwrap']  = TRUE;
			$config['smtp_host'] = 'ssl://besha-analitika.co.id';
			$config['smtp_port'] = 465;
			$config['smtp_user'] = 'info@besha-analitika.co.id';
			$config['smtp_pass'] = '20170510Moa^';

			$this->email->initialize($config);

			//send mail

			$this->email->from($from_email, 'Besha Analitika');
			$this->email->to(array($to_email,"service@besha-analitika.co.id"));
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();

			//echo $this->email->print_debugger();
			redirect("sparepart/invoice_success_page");
			//redirect("cart/show_cart");

		}

	}
	
	function test()
	{
		$subject = "test aja";
		$message = "test message";
		$from_email = "info@besha-analitika.co.id";
		
		$config['protocol']  = 'smtp';
		$config['mailtype']  = 'html';
		$config['priority']  = '1';
		$config['charset']   = 'iso-8859-1';
		$config['newline']   = "\r\n"; //use double quotes*/
		$config['wordwrap']  = TRUE;
		$config['smtp_host'] = 'ssl://besha-analitika.co.id';
		$config['smtp_port'] = 465;
		$config['smtp_user'] = 'info@besha-analitika.co.id';
		$config['smtp_pass'] = '20170510Moa^';
  
		$this->email->initialize($config);
  
		//send mail
  
		$this->email->from($from_email, 'Besha Analitika');
		$this->email->to(array("service@besha-analitika.co.id","alhusna901@gmail.com"));
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		
		$this->email->print_debugger();
	}
}