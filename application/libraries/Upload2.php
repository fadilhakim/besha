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
		
		function upload_process($arr)
		{
			$element = $arr["element"];
			
			
			
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
			$res = move_uploaded_file($this->tmp,$new_path);
			
			return array("name"=>$this->name,"res"=>$res,"size"=>$this->size );
			
		}	
		
		
	}