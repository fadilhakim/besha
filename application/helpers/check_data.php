<?php

	function check_image_sparepart($sparepart_id)
	{
		
		$CI =& get_instance();
		
		$CI->load->model("model_sparepart");
		$dt_sparepart = $CI->model_sparepart->get_sparepart_detail($sparepart_id);
		
		$base_url_image = base_url('assets/sp/images/products/');	
		$path_image = "assets/sp/images/products/";
		$file_name = $dt_sparepart["sparepart_image"];
		$full_url_image = $base_url_image.$file_name;
		$full_path_image = $path_image.$file_name;
		
		if(!empty($file_name) && is_file($full_path_image))
		{
			$file_name = $dt_sparepart["sparepart_image"];
			$full_url_image = $base_url_image.$file_name;
			$full_path_image = $path_image.$file_name;
		}
		
		
		
	}