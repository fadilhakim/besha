<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class admin extends CI_Controller {


	public function __construct(){

      parent::__construct();

      $this->load->model('model_home');

	     if(!$this->session->userdata('username')){



	     	redirect(base_url("login"));

	     }

  	}



	public function index()

	{

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('admin/home-admin');

		$this->load->view('templates/footer-admin');

	}



	public function users_admin()

	{

		$this->load->model('model_user');

		$data['users'] = $this->model_user->list_users();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_users',$data);

		$this->load->view('templates/footer-admin');

	}

	public function slider()

	{

		

		$data['slider'] = $this->model_home->list_slider()->result();



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/edit-slider', $data);

		$this->load->view('templates/footer-admin');

	}



	public function clients()

	{

		$data['clients'] = $this->model_home->list_clients()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_client', $data);

		$this->load->view('templates/footer-admin');

	}



	public function manufacturer()

	{

		$data['manu'] = $this->model_home->list_manufacturer()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_manufacturer', $data);

		$this->load->view('templates/footer-admin');

	}



	public function subscriber()

	{

		$data['subs'] = $this->model_home->list_subscriber()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_subscriber', $data);

		$this->load->view('templates/footer-admin');

	}



	public function members()

	{

		$data['members'] = $this->model_home->list_member()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_members', $data);

		$this->load->view('templates/footer-admin');

	}



	public function discount()

	{

		$section = $this->uri->segment(2);

		$data1 =  array('page_section' => $section);



		$data1['discount'] = $this->model_home->list_discount()->result();



		foreach ($data1['discount'] as $dc) {



			if (strtotime($dc->expired_date) < strtotime(date('Y-m-d'))) {

				

				$discount_id = $dc->discount_id;

				$status = 0;

				$data = array(

				'status' => $status,

				);

				$this->load->model('model_update');

				$this->model_update->update_discount($discount_id,$data);

			}

		}



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_discount', $data1);

		$this->load->view('templates/footer-admin');

	}



	public function sparepart()

	{

		$this->load->model('model_sparepart');

		$data['sparepart'] = $this->model_sparepart->list_sparepart();



		$data['sp_category'] = $this->model_sparepart->list_sparepart_category();



		$data['stock'] = $this->model_sparepart->get_stock_status()->result();



		$this->load->model('model_manufacturer');

		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_sparepart', $data);

		$this->load->view('templates/footer-admin');

	}



	public function list_sparepart()

	{

		$this->load->model('model_sparepart');

		$data['sparepart'] = $this->model_sparepart->list_sparepart();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_list_sparepart', $data);

		$this->load->view('templates/footer-admin');
	}

	public function order_history()

	{

		$this->load->model('order_model');
		$this->load->model("model_user");

		$data['list_order'] = $this->order_model->list_order();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_order_history', $data);

		$this->load->view('templates/footer-admin');
	}



	public function sparepart_category()

	{

		$last_status = $this->input->get('status');

		if ($last_status == 'failed') {

			$message = 'Sorry cannot delete category, there is a products in this category';

		}else {

			$message = '';

		}

			$this->load->model('model_sparepart');

			$data1['category'] = $this->model_sparepart->list_sparepart_category();
			$data1['manufacturer'] = $this->get_manufacturer();
			// $data1['listcat_manu'] = $this->model_sparepart->list_detail_sparepart_category();

			$data = array(

				'message' => $message,

				'category' => $data1['category'],
				'manufacturer' => $data1['manufacturer'],
				// 'listcat_manu' => $data1['listcat_manu']

		);

		$this->load->view('templates/meta-admin');
		$this->load->view('templates/menu-admin');
		$this->load->view('templates/leftsidemenu');
		$this->load->view('admin/v_sparepart_category', $data);
		$this->load->view('templates/footer-admin');

	}

	public function get_manufacturer() {
	 	$query = $this->db->get('manufacturer_tbl');
	    $return = array();
	    foreach ($query->result() as $manufacturer)
	    {

	        $return[$manufacturer->manu_id] = $manufacturer;
	        $return[$manufacturer->manu_id]->subs = $this->get_sparepart_categories($manufacturer->manu_id); // Get the categories sub categories
	    }
	    return $return;
	}


	public function get_sparepart_categories($manufacturer_id)

	{

	    $this->db->where('category_id', $manufacturer_id);
	    $query = $this->db->get('detail_sparepart_category_tbl');
	    return $query->result();
	}


	public function product()

	{





		$this->load->model('model_manufacturer');

		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();



		$this->load->model('model_product');

		$data['category'] = $this->model_product->list_category()->result();

		$data['stock'] = $this->model_product->get_stock_status()->result();



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_product',$data);

		$this->load->view('templates/footer-admin');

	}



	public function category_product()

	{

		$last_status = $this->input->get('status');

		if ($last_status == 'failed') {

			$message = 'Sorry cannot delete category, there is a products in this category';

/*			echo $message;

			die();*/

		}else {

			$message = '';

		}

		$this->load->model('model_product');

		$data1['category'] = $this->model_product->list_category()->result();

		$data = array(

			'message' => $message,

			'category' => $data1['category']

		);



				

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_product_category',$data);

		$this->load->view('templates/footer-admin');

	}



	public function event()

	{

		$section = $this->uri->segment(2);

		$data =  array('page_section' => $section);

		$this->load->model('model_event');

		$data['event'] = $this->model_event->list_event()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_event',$data);

		$this->load->view('templates/footer-admin');

	}



	public function news()

	{



		$this->load->model('model_news');

		$data['news'] = $this->model_news->list_news()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_news',$data);

		$this->load->view('templates/footer-admin');

	}



	public function list_product()

	{



		$this->load->model('model_manufacturer');

		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();



		$this->load->model('model_product');

		$data['category'] = $this->model_product->list_category()->result();

		$data['product'] = $this->model_product->list_product()->result();

		$data['stock'] = $this->model_product->get_stock_status()->result();



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_list_product',$data);

		$this->load->view('templates/footer-admin');

	}



	public function edit_slider($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');



		$data['slider'] = $this->model_update->list_slider($id);



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_slider',$data);

		$this->load->view('templates/footer-admin');

	}



	public function edit_manu($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');

		$data['manu'] = $this->model_update->list_manu($id);



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_manu',$data);

		$this->load->view('templates/footer-admin');

	}

	public function edit_order($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_sparepart');
		$this->load->model("Order_model");

		$data['order'] = $this->model_sparepart->getorderfromID($id);

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_order',$data);

		$this->load->view('templates/footer-admin');

	}
	
	function order_detail()
	{
		$id = $this->uri->segment(3);

		$id=trim($id);

		$this->load->model('model_sparepart');
		$this->load->model("order_model");

		$data["detail_list_order"] = $this->order_model->detail_list_order($id);
		$data['detail_order']      = $this->order_model->detail_order($id);

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_detail_order',$data);

		$this->load->view('templates/footer-admin');
		
	}



	public function edit_event($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');

		$data['event'] = $this->model_update->list_event($id);



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_event',$data);

		$this->load->view('templates/footer-admin');

	}



	public function edit_news($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');

		$data['news'] = $this->model_update->list_news($id);



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_news',$data);

		$this->load->view('templates/footer-admin');

	}



	public function edit_voucher($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');

		$data['discount'] = $this->model_update->list_discount($id);



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_discount',$data);

		$this->load->view('templates/footer-admin');

	}



	public function edit_admin($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');

		$data['admin'] = $this->model_update->list_admin($id);

		$data['roles'] = $this->model_update->list_role()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_users_admin',$data);

		$this->load->view('templates/footer-admin');

	}



	public function edit_member($id)

	{

		$id = $this->uri->segment(4);
		$this->load->model('model_update');
		$data['members'] = $this->model_update->list_members_byId($id);

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_member',$data);

		$this->load->view('templates/footer-admin');

	}



	public function edit_product($id_brand, $cat, $slug)

	{

		$id_brand=$this->uri->segment(3);

		$cat=$this->uri->segment(4);

		$slug=$this->uri->segment(5);



		$this->load->model('model_product');

		$getcatproduct = $this->model_product->getproductfromSLUGandcat($cat,$slug);

		$data['product_cat'] = $getcatproduct;



		$this->load->model('model_update');

		$data['product'] = $this->model_update->list_product($slug);



		$this->load->model('model_manufacturer');

		$getlistmanu = $this->model_manufacturer->list_manufacturer()->result();

		$data['manu'] = $getlistmanu;



		$getmanufacturer = $this->model_manufacturer->getManufacturer($id_brand);

		$data['manufacturer'] = $getmanufacturer;



		$data['category'] = $this->model_product->list_category()->result();

		$data['stock'] = $this->model_product->get_stock_status()->result();



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_product',$data);

		$this->load->view('templates/footer-admin');

	}



	public function edit_sparepart($id, $code)
	{
		$id=$this->uri->segment(3);
		$code=$this->uri->segment(4);
		
		$this->load->model('model_manufacturer');
		$this->load->model('model_sparepart');

		$data['sparepart'] = $this->model_sparepart->getproductfromIdandCode($id,$code)->result();
	
		/*$this->load->model('model_update');

		$data['product'] = $this->model_update->list_product($slug); */
	

		$getlistmanu = $this->model_manufacturer->list_manufacturer()->result();
		$data['manu'] = $getlistmanu;

		$data['category'] = $this->model_sparepart->list_sparepart_category();

		/*$getmanufacturer = $this->model_manufacturer->getManufacturer($id_brand);

		$data['manufacturer'] = $getmanufacturer;

		$data['category'] = $this->model_product->list_category()->result();

		$data['stock'] = $this->model_product->get_stock_status()->result();*/



		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_sparepart',$data);

		$this->load->view('templates/footer-admin');

	}



	

}

