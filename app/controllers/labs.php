<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Labs extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('my_imagesizer'); // load library 
		$this->load->helper('imageresize');
	}
	
	public function index()
	{
		//var_dump(site_farms_url('img-original/clouds.jpg'));
		//die();
		echo "<a href='#'>".imageResize('farms/img-original/street.jpg',300,300,'รูปภาพสินค้า')."</a>";

	}

}