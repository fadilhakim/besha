<?php 

class Model_event extends CI_Model {


		function list_event() {

			$event = $this->db->get('event_tbl');
			return $event;
		}

		function list_event_limit() {

			$this->db->select('*');
			$this->db->from('event_tbl');			
			$this->db->order_by('createdate','desc');
			$this->db->limit(3);

			$query = $this->db->get();
			return $query->result();
		}

		function geteventHighLight(){

			//$this->db->get_where('product_tbl',array('product_id' => $id));
			$this->db->select('*');
			$this->db->from('event_tbl');
			$this->db->where('event_status = 1 ');
			
			$this->db->order_by('createdate','desc');
			$this->db->limit(1);

			$query = $this->db->get();
			return $query->result();
		}

		function getEventById($id_event){

			$getidproduct = $this->db->get_where('event_tbl',array('news_id' => $id_event));
			return $getidproduct;
		}
}