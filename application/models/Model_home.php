<?php 

class Model_home extends CI_Model {


		function list_clients() {

			$clients = $this->db->get('client_tbl');
			return $clients;
		}

		function list_slider() {

			$slider = $this->db->get('slider_tbl');
			return $slider;
		}

		function list_manufacturer() {

			$slider = $this->db->get('manufacturer_tbl');
			return $slider;
		}

		function list_news() {
			$news = $this->db->get('news_tbl');
			return $news;
		}

		function list_subscriber() {
			$subs = $this->db->get('subscriber_tbl');
			return $subs;
		}

		function list_member() {
			$subs = $this->db->get('user_tbl');
			return $subs;
		}

		function list_discount() {

			return $this->db->get('discount_tbl');
		}
}