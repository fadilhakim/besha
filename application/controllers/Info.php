<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class info extends CI_Controller {


	function index() {
		phpinfo();
	}
}

