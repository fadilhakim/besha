<?php 

class Model_product extends CI_Model {

		public function __construct() {
 		$this->load->database();
 		}

		public function list_product() {

			$product = $this->db->get('product_tbl');
			return $product;
		}

		public function list_category() {

			$category = $this->db->get('category_tbl');
			return $category;
		}

		public function get_stock_status() {

			$stock = $this->db->get('product_stock_status');
			return $stock;
		}

		public function getimagefromID($product_id){

		$getimageId = $this->db->get_where('product_image_tbl',array('product_id' => $product_id));

		return $getimageId;

		}

		public function getproductfromID($id){

		//$this->db->get_where('product_tbl',array('product_id' => $id));
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_id = '.$id.'');
		$query = $this->db->get();
			if($query)
			{
				return $query->row();	
			}
			else
			{
				return false;
			}
		}

		public function getproductfromSLUGandcat($slug , $cat){

		$getslugproduct = $this->db->get_where('product_tbl',array('category_url' => $slug , 'product_slug' => $cat ));

		return $getslugproduct;

		}

		public function getproductfromSLUG($slug){

		$getslugproduct = $this->db->get_where('product_tbl',array('product_slug' => $slug));

		return $getslugproduct;

		}


		public function getcategory($cat){

		$getcate = $this->db->get_where('product_tbl',array('category_url' => $cat));

		return $getcate;

		}

		public function getfeatured(){

		$getfeatured = $this->db->get_where('product_tbl',array('featured' => '1'));

		return $getfeatured;

		}

		public function searchProduct($keyword){

			$this->db->like('product_slug',$keyword);
        	$query  =   $this->db->get('product_tbl');
        	return $query->result();

		}

		public function count_product() {
			return $this->db->count_all("product_tbl");
		}

		public function fetch_product($limit, $start = 0) {
	        $qry= $this->db->get("product_tbl", $limit, $start);
	    	return $qry->result();

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
        	return false;
   		}
		
		


}