<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller {
 
	function create()
	{
		$this->load->view('form_upload');
	}
}