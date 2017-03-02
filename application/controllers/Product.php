<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

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

	public function __construct(){
      parent::__construct();
      
      $this->load->helper("url");
      $this->load->model('model_product');
      $this->load->library('pagination');
  	}


	public function view()
	{

		$config = array();
        $config["base_url"] = base_url() . "/product";        
        $config["total_rows"] = $this->model_product->count_product();
		// Use pagination number for anchor URL.
		$config['use_page_numbers'] = TRUE;

		//Set that how many number of pages you want to view.
		$config['num_links'] =  $this->model_product->count_product();

		// Open tag for CURRENT link.
		$config['cur_tag_open'] = '<li class="active"><span>';

		// Close tag for CURRENT link.
		$config['cur_tag_close'] = '</span></li>';

		/*$config['next_tag_open'] = '<li><span>';

		$config['next_tag_close'] = '</span></li>';*/

		// By clicking on performing NEXT pagination.
		$config['next_link'] = '<li><span>Next';

		// By clicking on performing PREVIOUS pagination.
		$config['prev_link'] = '<li><span>Prev';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

        $limit = $config["per_page"] = 5;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["results"] = $this->model_product->fetch_product($limit, $page);
        $data["links"] = $this->pagination->create_links();

		$this->load->view('templates/meta');
		$this->load->view('templates/header');
		
		$data['category'] = $this->model_product->list_category()->result();

		$this->load->model('model_manufacturer');
		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();

		$this->load->view('product',$data);
		$this->load->view('templates/footer-2');
	}

	public function detail($id_brand, $cat, $slug)
	{
		/*$this->data['product'] = $this->model_product->get($id);*/
		/*count($this->data['product_cat']) || show_404(uri_string());*/
		
		$this->load->view('templates/meta');
		$this->load->view('templates/header');

		/*$product_id=$this->uri->segment(2);*/
		$id_brand=$this->uri->segment(2);
		$cat=$this->uri->segment(3);
		$slug=$this->uri->segment(4);
		$page = 'detail_product';
		/*$product_id=trim($product_id);*/
		$id_brand=trim($id_brand);
		$cat=trim($cat);
		$slug=trim($slug);

		$this->load->model('model_manufacturer');

		/*$getimage = $this->model_product->getimagefromID($product_id);
		$data['getimagefromID'] = $getimage;
*/
		$getmanufacturer = $this->model_manufacturer->getManufacturer($id_brand);
		$data['manufacturer'] = $getmanufacturer;

		$rp = $this->model_manufacturer->related($cat);
		$data['related'] = $rp;

		$getcatproduct = $this->model_product->getproductfromSLUGandcat($cat,$slug);
		$data['product_cat'] = $getcatproduct;
		

		$this->load->view($page, $data);
		$this->load->view('templates/footer-2');
	}

	public function category($cat) {

		$this->load->view('templates/meta');
		$this->load->view('templates/header');

		$cat=$this->uri->segment(2);
		$page = 'product_category';
		$cat=trim($cat);	
		$data['category'] = $this->model_product->list_category()->result();

		$this->load->model('model_manufacturer');
		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();

		$getcate = $this->model_product->getcategory($cat);
		$data['product'] = $getcate;

		$this->load->view($page, $data);
		$this->load->view('templates/footer-2');
	}

	public function manufacturer($manu) {

		$this->load->view('templates/meta');
		$this->load->view('templates/header');

		$manu=$this->uri->segment(3);
		$page = 'product_manufacturer';	
		$data['category'] = $this->model_product->list_category()->result();

		$this->load->model('model_manufacturer');
		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();

		$getmanu = $this->model_manufacturer->getproductbyManufacturer($manu);
		$data['product'] = $getmanu;

		$getmanuname = $this->model_manufacturer->getnameManufacturer($manu);
		$data['manuname'] = $getmanuname;

		$this->load->view($page, $data);
		$this->load->view('templates/footer-2');
	}

	public function search(){

		$this->load->view('templates/meta');
		$this->load->view('templates/header');
		$data['category'] = $this->model_product->list_category()->result();

		$this->load->model('model_manufacturer');
		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();
		$keyword=$this->uri->segment(3);
		$keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->model_product->searchProduct($keyword);
        $this->load->view('search_result',$data);
        $this->load->view('templates/footer-2');


	}
}

