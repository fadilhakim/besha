<?php 

class Model_news extends CI_Model {


		function list_news() {

			$news = $this->db->get('news_tbl');
			return $news;
		}

		function list_news_limit() {

			$this->db->select('*');
			$this->db->from('news_tbl');
			$this->db->order_by('createdate','desc');
			$this->db->limit(3);
			$query = $this->db->get();
			return $query->result();
		}

		function getnewsById($id){

			//$this->db->get_where('product_tbl',array('product_id' => $id));
			$this->db->select('*');
			$this->db->from('news_tbl');
			$this->db->where('news_id = '.$id.'');
			$query = $this->db->get();
			if($query)
			{
				return $query->result();	
			}
			else
			{
				return false;
			}
		}

		function getnewsHighLight(){

			//$this->db->get_where('product_tbl',array('product_id' => $id));
			$this->db->select('*');
			$this->db->from('news_tbl');
			$this->db->where('news_status = 1 ');
			
			$this->db->order_by('createdate','desc');
			$this->db->limit(3);

			$query = $this->db->get();
			return $query->result();
		}
}