<?php 
 
class model_cart extends CI_Model { 
     
	public function __construct() {
 		$this->load->database();
 		$this->load->library('cart');
	}

    // Function to retrieve an array with all product information
    function retrieve_products(){
        $query = $this->db->get('sparepart_tbl'); // Select the table products
        return $query->result_array(); // Return the results in a array.
    }

    function validate_add_cart_item(){
 
	    $id = $this->input->post('sparepart_id'); // Assign posted product_id to $id
	    $cty = $this->input->post('quantity'); // Assign posted quantity to $cty
     	$price = $this->input->post('sparepart_price');
     	$cty = $this->input->post('quantity');
     	$image = $this->input->post('sparepart_image');
     	$name = $this->input->post('sparepart_name');
     	$manu = $this->input->post('sparepart_manufacturer');
	    $this->db->select('*');
	    $this->db->from('sparepart_tbl');
	    $this->db->where('sparepart_id = '.$id.''); // Select where id matches the posted id
	    $this->db->limit(1);
		$query = $this->db->get(); // Select the products where a match is found and limit

		// Check if a row has matched our product id
		return $query->result();
	     
	}

	// Updated the shopping cart
	function validate_update_cart(){
     	
	   
	    // Get the total number of items in cart
	    $total = $this->cart->total_items();
	   
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
	        //$this->cart->update($data);
	    }
	 	die();
	}           
 
}
     	