<?php 

class Model_update extends CI_Model {


	public function __construct() {
 		
 		$this->load->database();
 	}

	function list_slider($id) {

		
		$getidslider = $this->db->get_where('slider_tbl',array('slider_id' => $id));

		return $getidslider;
	}

	function update_slider($slider_id, $data){

		$this->db->where('slider_id', $slider_id);
		$this->db->update('slider_tbl', $data);
	}

	function list_manu($id) {
		
		$getidslider = $this->db->get_where('manufacturer_tbl',array('manu_id' => $id));

		return $getidslider;
	}


	function update_manufacturer($manu_id, $data){

		$this->db->where('manu_id', $manu_id);
		$this->db->update('manufacturer_tbl', $data);
	}


	function list_event($id) {
		
		$getidslider = $this->db->get_where('event_tbl',array('news_id' => $id));

		return $getidslider;
	}

	function list_news($id) {
		
		$getidslider = $this->db->get_where('news_tbl',array('news_id' => $id));

		return $getidslider;
	}

	function update_event($event_id, $data){

		$this->db->where('news_id', $event_id);
		$this->db->update('event_tbl', $data);
	}

	function list_discount($id) {
		
		$getidslider = $this->db->get_where('discount_tbl',array('discount_id' => $id));

		return $getidslider;
	}

	function update_news($news_id, $data){

		$this->db->where('news_id', $news_id);
		$this->db->update('news_tbl', $data);
	}

	function update_discount($discount_id, $data){

		$this->db->where('discount_id', $discount_id);
		return $this->db->update('discount_tbl', $data);
		echo $this->db->last_query();
		die();
	}

	function list_product($id) {

		
		$getidslider = $this->db->get_where('product_tbl',array('product_id' => $id));

		return $getidslider;
	}

	function update_product($product_id, $data){

		$this->db->where('product_id', $product_id);
		return $this->db->update('product_tbl', $data);
	}

	function update_sparepart($sparepart_id, $data){

		$this->db->where('sparepart_id', $sparepart_id);
		return $this->db->update('sparepart_tbl', $data);
	}


	function list_admin($id) {
		
		$getidslider = $this->db->get_where('admin_tbl',array('admin_id' => $id));

		return $getidslider;
	}

	function update_admin($admin_id, $data){

		$this->db->where('admin_id', $admin_id);
		$this->db->update('admin_tbl', $data);
	}

	function update_member($user_id, $data){

		$this->db->where('user_id', $user_id);
		$this->db->update('user_tbl', $data);
	}

	public function list_role() {

			$product = $this->db->get('roles_tbl');
			return $product;
	}

	function list_members_byId($id) {
		
		$getidslider = $this->db->get_where('user_tbl',array('user_id' => $id));

		return $getidslider;
	}

}