<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Labs extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('my_imagesizer'); // load library 
		$this->load->helper('imageresize');
		$this->load->helper('form');
	}
	
	public function index()
	{
		//var_dump(site_farms_url('img-original/clouds.jpg'));
		//die();
		echo "<a href='#'>".imageResize('farms/img-original/street.jpg',100,100,'รูปภาพสินค้า')."</a>";

	}

	public function uploadForm()
	{
		$this->load->view('labs/uploadform_v');
	}

	public function doUpload()
	{
		$config['upload_path'] = site_farms_url('/labs/');
		$config['allowed_types'] = 'gif|jpg|png';
		/*
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		*/

		$this->load->library('upload', $config);
		//$this->upload->initialize($config);

		if (!$this->upload->do_upload('product_image'))
		{
		echo $error = array('error' => $this->upload->display_errors());

			//$this->load->view('upload_form', $error);
		}
		else
		{
			echo $data = array('upload_data' => $this->upload->data());

			//$this->load->view('upload_success', $data);
		}
	}

}