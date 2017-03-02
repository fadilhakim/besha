<?php 

class Model_insert extends CI_Model {


	public function __construct() {
 		
 		$this->load->database();
 	}

	function list_product() {

		$product = $this->db->get('product_tbl');

		return $product;
	}

	function insert($data,$table){

		$this->db->insert($table,$data);

		/*echo $this->db->last_query();
		die();*/
	}

	function insertAdmin($data)
    {
		return $this->db->insert('admin_tbl', $data);
	}

	function insertByUsername($data,$username)
    {
		$this->db->where('username', $username);
		$this->db->update('admin_tbl', $data);
	
	}

		

}