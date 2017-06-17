<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class insert extends CI_Controller {



	/**

	 * Index Page for this controller.

	 *

	 * Maps to the following URL

	 * 		http://example.com/index.php/welcome

	 *	- or -

	 * 		http://example.com/index.php/welcome/index

	 *	- or -

	 * Since this controller is set as the default controller in

	 * config/routes.php, it's displayed at http://example.com/

	 *

	 * So any other public methods not prefixed with an underscore will

	 * map to /index.php/welcome/<method_name>

	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */

	function __construct(){

		parent::__construct();



		$this->load->model('model_insert');

		$this->load->model('model_user');

		

		$this->load->library("Upload2");



	}

	function do_upload() {



		$product_image_1 = $this->input->post('product_image_1');

		$product_image_2 = $this->input->post('product_image_2');

		$product_image_3 = $this->input->post('product_image_3');

		$product_image_4 = $this->input->post('product_image_4');



		$config = array(



			'upload_path' => "./assets/image/product",

			'allowed_types' => "gif|jpg|png|jpeg|pdf",

			'remove_spaces' => FALSE,

			'overwrite' => TRUE,

			'max_size' => "2048000", 

			'max_height' => "768",

			'max_width' => "1024"



		);



		$data = array(

			'produt_image_1' => $product_image_1,

			'produt_image_2' => $product_image_2,

			'produt_image_3' => $product_image_3,

			'produt_image_4' => $product_image_4

			);



		$this->load->library('upload', $config);



		$this->insert->do_upload($data, 'product_tbl');

		

	}

	function insert_product()
	{


		$product_title = $this->input->post('product_title');

		$product_brand = $this->input->post('manu_id');

		$product_category = $this->input->post('product_category');

		$product_code = $this->input->post('product_code');

		$product_availability = $this->input->post('product_availability');

		$featured_product = $this->input->post('featured_product');

		$product_spec = $this->input->post('product_specification');

		$product_text_preview = $this->input->post('product_text_preview');

		$product_description = $this->input->post('product_descrption');

		$product_category_url = url_title($product_category);

		$product_slug = url_title($product_title);



		$product_image_1 = $_FILES['product_image_1']['name'];

		$product_image_1 = str_replace(' ' , '_' , $product_image_1);



		$product_image_2 = $_FILES['product_image_2']['name'];

		$product_image_2 = str_replace(' ' , '_' , $product_image_2);



		$product_image_3 = $_FILES['product_image_3']['name'];

		$product_image_3 = str_replace(' ' , '_' , $product_image_3);



		$product_image_4 = $_FILES['product_image_4']['name'];

		$product_image_4 = str_replace(' ' , '_' , $product_image_4);



		// $config['upload_path']	=	'./assets/image/product/' ;

		// $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';

		// $config['remove_spaces'] = FALSE;

		// $config['overwrite'] 	=	TRUE;

		// $config['max_size'] 	=	'2048000';

		// $config['max_height']	=  '1250';

		// $config['max_width'] 	=	'1300';



		$data = array(

			'product_title' => $product_title,

			'manu_id' => $product_brand,

			'product_category' => $product_category,



			'product_code' => $product_code,

			'product_availability' => $product_availability,

			'featured' => $featured_product,



			'product_specification' => 	$product_spec,

			'product_text_preview' => $product_text_preview,

			'product_descrption' => $product_description,



			'category_url' => $product_category_url,

			'product_slug' => $product_slug,



			'product_image_1' => $product_image_1,

			'product_image_2' => $product_image_2,

			'product_image_3' => $product_image_3,

			'product_image_4' => $product_image_4



		);

		/* $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('product_image_1');
		$this->upload->do_upload('product_image_2');
		$this->upload->do_upload('product_image_3');
		$this->upload->do_upload('product_image_4');*/

		//upload baru
		$img_msg = "";
		if(!empty($_FILES["product_image_1"]["name"]))
		{

			$arr1["new_path"] = "assets/image/product";

			$arr1["element"]  = "product_image_1"; 

			$a = $this->upload2->upload_process($arr1);
			$img_msg .= $a["msg"];

		}

		

		if(!empty($_FILES["product_image_2"]["name"]))
		{

			$arr2["new_path"] = "assets/image/product";
			$arr2["element"]  = "product_image_2"; 
			$b = $this->upload2->upload_process($arr2);
			$img_msg .= $b["msg"];

		}

	
		if(!empty($_FILES["product_image_3"]["name"]))
		{
			$arr3["new_path"] = "assets/image/product";
			$arr3["element"]  = "product_image_3"; 
			$c = $this->upload2->upload_process($arr3);
			$img_msg .= $c["msg"];
		}

		

		if(!empty($_FILES["product_image_4"]["name"]))
		{
			$arr4["new_path"] = "assets/image/product";
			$arr4["element"]  = "product_image_4"; 
			$d = $this->upload2->upload_process($arr4);
			$img_msg .= $d["msg"];
		}
		
		$result = $this->model_insert->insert($data,'product_tbl');

		if($result == TRUE /* && (!$a["err"] || !$b["err"] || !$c["err"] || !$d["err"]) */)
		{

			$value='<div class="alert alert-success">Insert Product Success '.$img_msg.' </div>';
			$this->session->set_flashdata('message',$value);
			redirect('admin/product-list');		
		}
		else
		{
			
			$value='<div class="alert alert-danger"> Insert Product Failed '.$img_msg.'</div>';
			$this->session->set_flashdata('message',$value);
			redirect('admin/product');		

		}

	}

	function insert_sparepart()
	{

		$sparepart_name = $this->input->post('sparepart_name');
		$manu_id = $this->input->post('manu_id');
		$sparepart_category = $this->input->post('sparepart_category');
		$catalog_code = $this->input->post('catalog_code');
		$sparepart_price = $this->input->post('sparepart_price');
		$sparepart_stock = $this->input->post('sparepart_stock');
		$berat = $this->input->post('berat');
		$dimensi = $this->input->post('dimensi');
		$sparepart_desc = $this->input->post('sparepart_desc');
		$sparepart_text_preview = $this->input->post('sparepart_text_preview');
		$sparepart_slug = url_title($sparepart_name);

		$product_image_1 = $_FILES['sparepart_image']['name'];
		$product_image_1 = str_replace(' ' , '_' , $product_image_1);

		$product_image_2 = $_FILES['sparepart_image_2']['name'];
		$product_image_2 = str_replace(' ' , '_' , $product_image_2);

		$product_image_3 = $_FILES['sparepart_image_3']['name'];
		$product_image_3 = str_replace(' ' , '_' , $product_image_3);

		$product_image_4 = $_FILES['sparepart_image_4']['name'];
		$product_image_4 = str_replace(' ' , '_' , $product_image_4);

		/* $config['upload_path']	=	'./assets/sp/images/products/' ;
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
		$config['remove_spaces'] = FALSE;
		$config['overwrite'] 	=	TRUE;
		$config['max_size'] 	=	'2048000';
		$config['max_height']	=  '1250';
		$config['max_width'] 	=	'1300'; */


		$data = array(

			'sparepart_name' => $sparepart_name,
			'manu_id' => $manu_id,
			'sparepart_category' => $sparepart_category,

			'sparepart_code' => $catalog_code,
			'sparepart_price' => $sparepart_price,

			'stock' => 	$sparepart_stock,
			'sparepart_text_preview' => $sparepart_text_preview,
			'sparepart_desc' => $sparepart_desc,

			'sparepart_slug' => $sparepart_slug,
			'berat' => $berat,
			'dimensi' => $dimensi,
			
			'sparepart_image' => $product_image_1,
			'sparepart_image_2' => $product_image_2,
			'sparepart_image_3' => $product_image_3,
			'sparepart_image_4' => $product_image_4

		);



		$this->load->library('upload2');

		/* $this->upload->do_upload('sparepart_image');
		$this->upload->do_upload('sparepart_image_2');
		$this->upload->do_upload('sparepart_image_3');
		$this->upload->do_upload('sparepart_image_4'); */
		$img_msg = "";
		$new_path = "assets/sp/images/products/";
		if(!empty($_FILES["sparepart_image"]["name"]))
		{
			$arr1["new_path"] = $new_path;
			$arr1["element"]  = "sparepart_image"; 
			$a = $this->upload2->upload_process($arr1);
			$img_msg .= $a["msg"];

		}

		

		if(!empty($_FILES["sparepart_image_2"]["name"]))
		{

			$arr2["new_path"] = $new_path;
			$arr2["element"]  = "sparepart_image_2"; 
			$b = $this->upload2->upload_process($arr2);
			$img_msg .= $b["msg"];

		}

		if(!empty($_FILES["sparepart_image_3"]["name"]))
		{

			$arr3["new_path"] = $new_path;
			$arr3["element"]  = "sparepart_image_3"; 
			$c = $this->upload2->upload_process($arr3);
			$img_msg .= $c["msg"];

		}

		if(!empty($_FILES["sparepart_image_4"]["name"]))
		{
			$arr4["new_path"] = $new_path;
			$arr4["element"]  = "sparepart_image_4"; 
			$d = $this->upload2->upload_process($arr4);
			$img_msg .= $d["msg"];
		}

		$result = $this->model_insert->insert($data,'sparepart_tbl');

		if($result == TRUE)
		{

			$value='<div class="alert alert-success"> Insert Sparepart Success '.$img_msg.'</div>';
			$this->session->set_flashdata("message",$value);
			redirect('admin/list_sparepart');

		}

		else

		{

			$value='<div class="alert alert-danger"> Insert Sparepart Failed '.$img_msg.' </div>';
			$this->session->set_flashdata('message',$value);
			redirect('admin/sparepart');

		}

			

		

	}

	function insert_slider()
	{

		$slider_title = $this->input->post('slider_title');

		$slider_link = $this->input->post('slider_link');

		$slider_image = $_FILES['slider_image']['name'];

		/*str_replace(' ', '_', $slider_image);*/


		/* $config = array(
			'upload_path' => "./assets/image/slider/",

			'allowed_types' => "gif|jpg|png|jpeg|pdf",

			'remove_spaces' => FALSE,

			'overwrite' => TRUE,

			'max_size' => "2048000", 

			'max_height' => "2200",

			'max_width' => "2200"

		);*/



		$data = array(

			'slider_title' => $slider_title,

			'slider_link' => $slider_link,

			'silder_image' => $slider_image

		);

		
		$new_path = "assets/image/slider/";
		if(!empty($_FILES["slider_image"]["name"]))
		{

			$arr1["new_path"] = $new_path;

			$arr1["element"]  = "slider_image"; 

			$a = $this->upload2->upload_process($arr1);

		}


		$result = $this->model_insert->insert($data,'slider_tbl');



		if($result!=false)

		{

		$value='Insert Product Success';

		/*$this->do_upload($result);*/

		}

		else

		{

		$value='Insert Product Failed';

		}

		$this->session->set_flashdata('error_product',$value);	



		redirect('admin/slider');	

	}

	function insert_client()
	{

		$client_name = $this->input->post('client_name');

		$client_image = $_FILES['client_image']['name'];


		/*$config = array(
		
			'upload_path' => "./assets/image/clients/",

			'allowed_types' => "gif|jpg|png|jpeg|pdf",

			'remove_spaces' => FALSE,

			'overwrite' => TRUE,

			'max_size' => "2048000", 

			'max_height' => "600",

			'max_width' => "1400"

		);*/


		$data = array(
			'client_name' => $client_name,
			'client_image' => $client_image
		);
		
		$new_path = "assets/image/clients/";
		if(!empty($_FILES["client_image"]["name"]))
		{

			$arr1["new_path"] = $new_path;
			$arr1["element"]  = "client_image"; 
			$a = $this->upload2->upload_process($arr1);

		}

		$result = $this->model_insert->insert($data,'client_tbl');

		if($result!=false)

		{

		$value='Insert Product Success';

		/*$this->do_upload($result);*/

		}

		else

		{

		$value='Insert Product Failed';

		}

		$this->session->set_flashdata('error_product',$value);	



		redirect('admin/client');	

	}

	function insert_manufacturer()
	{


		$manu_name = $this->input->post('manu_name');

		$manu_link = $this->input->post('manu_link');

		$manu_desc = $this->input->post('manu_desc');

		$manu_image = $_FILES['manu_image']['name'];





		/*$config = array(

			'upload_path' => "./assets/image/manufacturer/",

			'allowed_types' => "gif|jpg|png|jpeg|pdf",

			'remove_spaces' => FALSE,

			'overwrite' => TRUE,

			'max_size' => "2048000", 

			'max_height' => "600",

			'max_width' => "1400"
		);*/



		$data = array(

			'manu_title' => $manu_name,

			'manu_link' => $manu_link,

			'manu_desc' => $manu_desc,

			'manu_image' => $manu_image

		);

		/*$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('manu_image');*/
		
		$new_path = "assets/image/manufacturer/";
		if(!empty($_FILES["menu_image"]["name"]))
		{

			$arr1["new_path"] = $new_path;
			$arr1["element"]  = "menu_image"; 
			$a = $this->upload2->upload_process($arr1);

		}


		$result = $this->model_insert->insert($data,'manufacturer_tbl');

		if($result!=false)

		{

		$value='Insert Product Success';

		/*$this->do_upload($result);*/

		}

		else

		{

		$value='Insert Product Failed';

		}

		$this->session->set_flashdata('error_product',$value);	



		redirect('admin/manufacturer');	

	}

	function insert_event()
	{

		$event_name = $this->input->post('event_name');
		$event_desc = $this->input->post('event_desc');
		$event_date = $this->input->post('start_date');
		$event_status = $this->input->post('event_status');
		$event_image = $_FILES['event_image']['name'];


		/*$config = array(

			'upload_path' => "./assets/image/events/",

			'allowed_types' => "gif|jpg|png|jpeg|pdf",

			'remove_spaces' => FALSE,

			'overwrite' => TRUE,

			'max_size' => "2048000", 

			'max_height' => "600",

			'max_width' => "1400"
		);*/



		$data = array(

			'news_title' => $event_name,
			'news_desc' => $event_desc,
			'news_image' => $event_image,
			'createdate' => $event_date,
			'event_status' => $event_status,

		);

		/* $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('event_image'); */
		
		if(!empty($_FILES["event_image"]["name"]))
		{

			$arr4["new_path"] = "assets/image/events/";
			$arr4["element"]  = "event_image"; 
			$d = $this->upload2->upload_process($arr4);
		}

		$result = $this->model_insert->insert($data,'event_tbl');

		if($result!=false)

		{

		$value='Insert Product Success';

		/*$this->do_upload($result);*/

		}

		else

		{

		$value='Insert Product Failed';

		}

		$this->session->set_flashdata('error_product',$value);

		redirect('admin/event');	

	}

	function insert_news()
	{

		$news_name = $this->input->post('news_name');

		$news_desc = $this->input->post('news_desc');

		$hightlight = $this->input->post('hightlight');

		$news_image = $_FILES['news_image']['name'];

		$news_thumb_image = $_FILES['news_thumb_image']['name'];

		/*$config = array(

			'upload_path' => "./assets/image/news/",

			'allowed_types' => "gif|jpg|png|jpeg|pdf",

			'remove_spaces' => FALSE,

			'overwrite' => TRUE,

			'max_size' => "2048000", 

			'max_height' => "600",

			'max_width' => "1400"
			
		);*/



		$data = array(

			'news_title' => $news_name,

			'news_desc' => $news_desc,

			'news_image' => $news_image,

			'news_thumbnail' => $news_thumb_image,

			'news_status' => $hightlight

		);

		

		/*$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('news_image');
		$this->upload->do_upload('news_thumb_image');*/

		if(!empty($news_image))
		{
			$arr["new_path"] = "assets/image/news/";
			$arr["element"]  = "news_image"; 
			$d = $this->upload2->upload_process($arr);
		}
		
		if(!empty($news_thumb_image))
		{
			$arr["new_path"] = "assets/image/news/";
			$arr["element"]  = "news_thumb_image"; 
			$d = $this->upload2->upload_process($arr);
		}

		$result = $this->model_insert->insert($data,'news_tbl');

		if($result!=false)

		{

		$value='Insert Product Success';

		/*$this->do_upload($result);*/

		}

		else

		{

		$value='Insert Product Failed';

		}

		$this->session->set_flashdata('error_product',$value);	



		redirect('admin/news');	

	}



	function insert_discount()

	{





		$discount_code = $this->input->post('discount_code');

		$discount_price = $this->input->post('discount_price');

		$discount_name= $this->input->post('discount_name');

		$discount_desc = $this->input->post('discount_desc');

		$start_date = $this->input->post('start_date');

		$expired_date = $this->input->post('expired_date');

		if (strtotime($expired_date) < strtotime(date('Y-m-d'))) {

			$status = 0;

		}

		else

		{

			$status = 1;

		}



		$data = array(

			'discount_code' => $discount_code,

			'discount_price' => $discount_price,

			'discount_name' => $discount_name,

			'discount_desc' => $discount_desc,

			'start_date' => $start_date,

			'expired_date' => $expired_date,

			'status'	=> $status

		);

		



		$result = $this->model_insert->insert($data,'discount_tbl');



	

		$value='Add Discount Failed';

		

		$this->session->set_flashdata('error_product',$value);	



		redirect('admin/discount');	

	}



	function insert_admin()

	{





		$username = $this->input->post('username');

		$surename = $this->input->post('surename');

		$role_name= $this->input->post('role_name');

		$to_email= $this->input->post('email');





		$data = array(

			'username' => $username,

			'surename' => $surename,

			'role_id' => $role_name,

			'email' => $to_email,

			'status' => 0

		);

		



		if($this->model_insert->insertAdmin($data)) {



			// send email

				if ($this->model_user->sendEmailAdmin($to_email , $username))

				{

					// successfully sent mail

					$this->session->set_flashdata('msg','<div class="alert alert-success text-center"><strong>Waiting user for confirm their email!</strong></div>');

					

					redirect('admin/users_admin');

				}

				else

				{

					// error

					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');

					redirect('admin/users_admin');

				}



		} 



		else {



		/*	$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');

			redirect('admin/users_admin');*/	

		}



		die();



		redirect('admin/users_admin');	

	}



	function insert_category_product()

	{





		$category_name = $this->input->post('category_name');

		$category_url = url_title($category_name);



		



		$data = array(

			'category_title' => $category_name,

			'category_url' => $category_url



		);

		



		$result = $this->model_insert->insert($data,'category_tbl');

		redirect('admin/product-category');	

	}



	function insert_category_sparepart()

	{

		$sparepart_category_name = $this->input->post('sparepart_category_name');

		$sparepart_category_url = url_title($sparepart_category_name);

		$data = array(

			'category_title' => $sparepart_category_name,

			'category_slug' => $sparepart_category_url

		);


		$result = $this->model_insert->insert($data,'sparepart_category');

		redirect('admin/sparepart_category');	

	}

	function category_to_manu()

	{

		$manu_id = $this->input->post('manu_id');
		$cat_id = $this->input->post('cat_id');
		$data = array(

			'category_id' => $manu_id,
			'sparepart_category_id' => $cat_id
		);

		$result = $this->model_insert->insert($data,'detail_sparepart_category_tbl');

		redirect('admin/sparepart_category');	

	}			



}

