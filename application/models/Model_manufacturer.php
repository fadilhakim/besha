<?php 

class Model_manufacturer extends CI_Model {

		public function list_manufacturer() {

			$manus = $this->db->get('manufacturer_tbl');
			return $manus;
		}

		public function list_client() {

			$manus = $this->db->get('client_tbl');
			return $manus;
		}

		public function getManufacturer($id_brand){

			$this->db->select('*');    
			$this->db->from('product_tbl');
			$this->db->join('manufacturer_tbl', 'manufacturer_tbl.manu_id = product_tbl.manu_id');
			$this->db->where('product_tbl.manu_id = ' . "'" . $id_brand . "'");
			$query = $this->db->get();
			return $query->result();
		}

		public function getproductbyManufacturer($manu){

			$getmanu = $this->db->get_where('product_tbl',array('manu_id' => $manu));

			return $getmanu;
		}

		public function getsparepartbyManufacturer($manu){

			$getmanu = $this->db->get_where('sparepart_tbl',array('manu_id' => $manu));

			return $getmanu;
		}

		public function getnameManufacturer($manu){

			$this->db->select('*');    
			$this->db->from('manufacturer_tbl');
			$this->db->where('manufacturer_tbl.manu_id = ' . "'" . $manu . "'");
			$query = $this->db->get();
			return $query->result();
		}
		public function related($cat){

			$this->db->select('*');    
			$this->db->from('product_tbl');
			$this->db->where('product_tbl.category_url = ' . "'" . $cat . "'");
			$this->db->order_by("UPPER(product_id)","desc");
			$query = $this->db->get();
			return $query->result();
		}


}