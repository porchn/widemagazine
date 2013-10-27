<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

	private $_templateDir;
	public function __construct()
	{
		parent::__construct();
		$this->_templateDir = 'template/admin_root/';
	}

	public function top()
	{
		$data = array();
		$this->template->write_view('top', $this->_templateDir.'top', $data, true);
	}

	public function sidebar()
	{


		$data=array();
		$this->template->write_view('sidebar', $this->_templateDir.'sidebar',$data, true);
	}
	
}