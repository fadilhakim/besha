<?php
 
class cart extends CI_Controller { // Our Cart class extends the Controller class
     
    public function __construct(){
      parent::__construct();
   	  $this->load->model('model_cart');
	  $this->load->helper("check_data");
	  
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
		
		$this->load->model('model_sparepart');
		
		$this->load->view('templates/meta_sparepart');
		$this->load->view('templates/header_sparepart');
    	$this->load->view('sparepart/v_cart');
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
	
	function send_email_invoice()
	{
		$this->load->model("model_user");
		$this->load->model("model_sparepart");
		
		$cart = $this->cart->contents();
		
		//print_r($cart);
		$user_session = $this->session->all_userdata();
		 
		$this->load->view("invoice/invoice-page");
	}

 
}