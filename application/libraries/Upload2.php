<?php

	class Upload2{
		
		private $path;
		private $size;
		private $type;
		private $name;
		private $tmp;
		
		private $allowed_type;
		
		private $param;
		
		//private $new_base_path;
		
		function __construct()
		{
			
		}
		
		function check_allowed_type()
		{
			
		}
		
		function check_element($file_tmp)
		{
			//echo "file_tmp : ".$file_tmp; 
			$product_element = array("product_image_1","product_image_2","product_image_3","product_image_4","product_image_new_1","product_image_new_2","product_image_new_3","product_image_new_4");
			
			$sparepart_element = array("sparepart_image","sparepart_image_2","sparepart_image_3","sparepart_image_4","sparepart_image_new_1","sparepart_image_new_2","sparepart_image_new_3","sparepart_image_new_4"); 
			
			$res = FALSE;
			if(in_array($file_tmp,$product_element) || in_array($file_tmp,$sparepart_element))
			{
				$res = TRUE;	
			}
			
			return $res;
		}
		
		function check_size($file_tmp)
		{
			$img_size = getimagesize($file_tmp["tmp_name"]);
		}
		
		function check_dimension($file_tmp)
		{
			
			  $img_size = getimagesize($file_tmp["tmp_name"]);
			  $res = FALSE;
			  
			  $image_width = $img_size[0];
			  $image_height = $img_size[1];
			
			if(!empty($file_tmp))
			{	
			  
			
			  
			  if($image_width <= 300 && $image_height >= 250)
			  {
				  $res = TRUE;	
			  }
			  
			  
			
			}
			else
			{
				$res = TRUE;
				
			}
			
			return array("width"=>$image_width,"height"=>$image_height,"res"=>$res);
			
		}
		
		function check_all()
		{
			
			
		}
		
		function upload_process($arr)
		{
			$element = $arr["element"];
			$msg = "";
			$err = FALSE;
			
			
			// cara lain
			// $this->param = $param;
			//$param_new = $this->param;
			//$element = $param_new["element"];	
			
			$this->name = $_FILES[$element]["name"];
			
			$this->size = $_FILES[$element]["size"];
			
			$pathinfo = pathinfo($this->name); 
			
			$this->type = $pathinfo['extension'];
			$this->tmp = $_FILES[$element]["tmp_name"];
			
			$this->path = $arr["new_path"];
			$new_path = $this->path."/".$this->name; 
			//echo "<br>";
			// upload
			
			// SEMUA CHECK ada disini 
			// check element maksudnya, element 
			$check_element = $this->check_element($element);
			if($check_element)
			{
				$check_dimension = $this->check_dimension($_FILES[$element]); 
				//var_dump($check_dimension); exit;
				if(!$check_dimension["res"] )
				{
					$err = TRUE;
					
				}
			}			
			
			if($err == FALSE)
			{
				
				move_uploaded_file($this->tmp,$new_path);
				$msg .= "<div> Upload Data success </div>";
			}
			else
			{
				//semua pesan error
				if($check_dimension["res"] == FALSE)
				{
					$msg .= "<div> <strong>Warning!</strong> image $element dimension should be H : 250 W : 300. and your image is W : $check_dimension[width] H : $check_dimension[height]  </div>";	
				}
				
			}
			
			return array("name"=>$this->name,"size"=>$this->size,"msg"=>$msg,
			"err"=>$err);
			
		}	
		
		
	}