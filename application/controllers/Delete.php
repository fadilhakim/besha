<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class delete extends CI_Controller {

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

		$this->load->model('model_delete');


	}

	public function delete_slider() {

		/*$id = $this->input->post('slider_id');
        $image = $this->input->post('slider_image');*/
		$id = $this->uri->segment(4);
		$image = $this->uri->segment(5);
		/*$where = array('slider_id' => $id);*/
		$this->model_delete->delete_slider($id, $image);
		redirect('admin/slider');
	}

	public function delete_client() {

		$id = $this->uri->segment(4);
		$image = $this->uri->segment(5);
		$this->model_delete->delete_client($id, $image);
		redirect('admin/client');
	}

	public function delete_manufacturer() {

		$id = $this->uri->segment(4);
		$image = $this->uri->segment(5);
		$this->model_delete->delete_manufacturer($id, $image);
		redirect('admin/manufacturer');
	}

	public function delete_event() {

		$id = $this->uri->segment(4);
		$image = $this->uri->segment(5);
		$this->model_delete->delete_event($id, $image);
		redirect('admin/event');
	}

	public function delete_news() {

		$id = $this->uri->segment(4);

		$this->load->model('model_news');
		$getdata['getimage'] = $this->model_news->getnewsById($id);
		foreach ($getdata['getimage'] as $row);
		$image1 = $row->news_image;
		$image2 = $row->news_thumbnail;

		unlink(FCPATH . "assets/image/news/".$image1);
        unlink(FCPATH . "assets/image/news/".$image2);

		$this->model_delete->delete_news($id);
		redirect('admin/news');
	}

	public function delete_product() {

		/*$id = $this->input->post('slider_id');
        $image = $this->input->post('slider_image');*/
		$id = $this->uri->segment(4);
		$this->load->model('model_product');
		$getdata['getimage'] = $this->model_product->getproductfromID($id);
		foreach ($getdata['getimage'] as $row);
		$image1 = $row->product_image_1;
		$image2 = $row->product_image_2;
		$image3 = $row->product_image_3;
		$image4 = $row->product_image_4;
		
		unlink(FCPATH . "assets/image/product/".$image1);
        unlink(FCPATH . "assets/image/product/".$image2);
        unlink(FCPATH . "assets/image/product/".$image3);
        unlink(FCPATH . "assets/image/product/".$image4);

		$this->model_delete->delete_product($id);
		redirect('admin/product-list');
	}

	public function delete_sparepart() {

		/*$id = $this->input->post('slider_id');
        $image = $this->input->post('slider_image');*/
		$id = $this->uri->segment(4);
		$code = $this->uri->segment(5);
		$this->load->model('model_sparepart');
		$getdata['getimage'] = $this->model_sparepart->getproductfromIdandCode($id,$code);
		foreach ($getdata['getimage'] as $row);
		$image1 = $row->sparepart_image;
		$image2 = $row->sparepart_image_2;
		$image3 = $row->sparepart_image_3;
		$image4 = $row->sparepart_image_4;
		
		unlink(FCPATH . "assets/sp/images/products/".$image1);
        unlink(FCPATH . "assets/sp/images/products/".$image2);
        unlink(FCPATH . "assets/sp/images/products/".$image3);
        unlink(FCPATH . "assets/sp/images/products/".$image4);

		$this->model_delete->delete_sparepart($id);
		redirect('admin/list_sparepart');
	}

	public function delete_category()
	{

        	$get_category_id = $this->uri->segment(4);

        	$select_type 			=  '*';
        	$table_name  			=  'product_tbl';
        	$foreignkey_table	 	=  'category_url';
        	$table_join_1 			=  'category_tbl';
        	$coloum_id_join_1 		=  'category_url';
        	$condition_coloum 		=  'category_url';
        	$value_condition 		=  ''.$get_category_id.'';

			$check_product_data['count_data'] = $this->model_delete->check_product($get_category_id);
        
        	if($check_product_data['count_data'] == true)
        	{
        		$status = 'failed';
        		redirect('admin/product-category?status='.$status.'');

        	}
        	else
        	{
        		$get_id_data	= ''.$get_category_id.'';
        		$colloum_table  = 'category_url';
        		$table_name     = ''.$table_join_1.'';

        		$delete_file = $this->model_delete->delete_data_1_condition($get_id_data,$table_name,$colloum_table);

        		if($delete_file == true)
        		{
        			redirect('admin/product-category');
        		}
        	}
    }

    public function delete_sparepart_category()
	{

        	$get_category_id = $this->uri->segment(4);

        	$select_type 			=  '*';
        	$table_name  			=  'sparepart_tbl';
        	$foreignkey_table	 	=  'sparepart_category';
        	$table_join_1 			=  'sparepart_category';
        	$coloum_id_join_1 		=  'category_slug';
        	$condition_coloum 		=  'category_slug';
        	$value_condition 		=  ''.$get_category_id.'';

			$check_product_data['count_data'] = $this->model_delete->check_product($get_category_id);
        
        	if($check_product_data['count_data'] == true)
        	{
        		$status = 'failed';
        		redirect('admin/sparepart_category?status='.$status.'');

        	}
        	else
        	{
        		$get_id_data	= ''.$get_category_id.'';
        		$colloum_table  = 'category_slug';
        		$table_name     = ''.$table_join_1.'';

        		$delete_file = $this->model_delete->delete_data_1_condition($get_id_data,$table_name,$colloum_table);

        		if($delete_file == true)
        		{
        			redirect('admin/sparepart_category');
        		}
        	}
    }

    public function delete_voucher() {

		$id = $this->uri->segment(4);
		$this->model_delete->delete_voucher($id);
		redirect('admin/discount');
	}

	public function delete_admin() {

		$id = $this->uri->segment(4);
		$this->model_delete->delete_admin($id);
		redirect('admin/users_admin');
	} 

}
