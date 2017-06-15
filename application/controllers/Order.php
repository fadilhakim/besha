<?php 

	class Order extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			
			$this->load->model("order_model");	
			$this->load->model("model_cart");
			$this->load->library("cart");
			 $this->load->helper("check_data");
		}
		
		function insert_order()
		{
			$this->authentification->logged_in();
			
			$this->load->library("form_validation");
			
			
			$id_add_user  = $this->input->post("address_book",TRUE);
			/* $id_province  = $this->input->post("id_province",TRUE);
			$id_city	  = $this->input->post("id_city",TRUE);
			$kecamatan	  = $this->input->post("kecamatan",TRUE);
			$kode_pos	  = $this->input->post("kode_pos",TRUE);*/
			
			$shipping_address = $this->input->post("shipping_address",TRUE);
			$billing_address = $this->input->post("billing_address",TRUE);
			
			$grand_total_session = $this->session->userdata("grand_total");
			
			/* $this->form_validation->set_rules("id_province","Province","required");
			$this->form_validation->set_rules("id_city","City","required");
			$this->form_validation->set_rules("kecamatan","Kecamatan","required");
			$this->form_validation->set_rules("kode_pos","Kode Pos","required");*/
			
			/* $this->form_validation->set_rules("kurir","Kurir","required");
			$this->form_validation->set_rules("total_weight","Total Weight","required");
			$this->form_validation->set_rules("layanan_kurir","Layanan Kurir","required");*/
			
			$this->form_validation->set_rules("shipping_address","Shipping Address","required");
			$this->form_validation->set_rules("billing_address","Billing Address","required");
			
			$cart_content =  $this->cart->contents();
			
			if(!empty($cart_content) && $this->form_validation->run() == TRUE)
			{
				
				$order = $this->order_model->insert_order();
				
				$date = date("d-m-Y"); 
				$name_pdf = "Besha invoice $date.pdf";
				$data["user_sess"] = $this->session->all_userdata();
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
				
				//hapus cart 
				$this->cart->destroy();
				
				/*$suceess = success("You Successfully save Order. now you must confirm the Payment 24 Hours after you order ");
				$this->session->set_flashdata("message",$suceess);*/
				
				//echo $this->email->print_debugger();
				redirect("sparepart/invoice_success_page");
				
				//redirect(base_url("besha/sparepart"));
				//redirect("cart/send_email_invoice");
				
			}
			else
			{
				$err = "";
				if(empty($cart_content))
				{
					$err  .= "<p> Your Cart is empty </p>";
				}
				
				$err .= validation_errors(); 
				$message = danger($err);
				$this->session->set_flashdata("message",$message);
				
				redirect("cart/show_cart");	
			}
			
		}
		
		function cancel_order()
		{
			$id_order = $this->input->post("id_order");	
			
		}
		
		function test()
		{
			$sess = $this->session->all_userdata();
			print_r($sess);
			
		}
		
	}