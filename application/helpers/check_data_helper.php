<?php

	function check_image_sparepart($sparepart_id)
	{
		
		$CI =& get_instance();
		
		$CI->load->model("model_sparepart");
		$dt_sparepart = $CI->model_sparepart->get_sparepart_detail($sparepart_id);
		
		$base_url_image = base_url('assets/sp/images/products/');	
		$path_image = "assets/sp/images/products/";
		$full_url_image = base_url('assets/sp/images/no-image.png');
		
		if(!empty($dt_sparepart["sparepart_image"]) && is_file($path_image.$dt_sparepart["sparepart_image"]))
		{
			$file_name = $dt_sparepart["sparepart_image"];
			
			$full_url_image = $base_url_image.$file_name;
			$full_path_image = $path_image.$file_name;
		}
		else if(!empty($dt_sparepart["sparepart_image2"]) && is_file($path_image.$dt_sparepart["sparepart_image2"]))
		{
			$file_name = $dt_sparepart["sparepart_image2"];
			
			$full_url_image = $base_url_image.$file_name;
			$full_path_image = $path_image.$file_name;
		}
		else if(!empty($dt_sparepart["sparepart_image3"]) && is_file($path_image.$dt_sparepart["sparepart_image3"]))
		{
			$file_name = $dt_sparepart["sparepart_image3"];
			
			$full_url_image = $base_url_image.$file_name;
			$full_path_image = $path_image.$file_name;
		}
		else if(!empty($dt_sparepart["sparepart_image4"]) && is_file($path_image.$dt_sparepart["sparepart_image4"]))
		{
			$file_name = $dt_sparepart["sparepart_image4"];
			
			$full_url_image = $base_url_image.$file_name;
			$full_path_image = $path_image.$file_name;
		
		}
		
		return $full_url_image;
	}