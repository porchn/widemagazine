<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wg_menu extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index($current=null){
		//$data=array();

		$menu=$this->load->view('menu',null,true);
				
		return $menu;

		//$this->template->write_view('menu', $this->_templateDir.'menu',$data, true);
	}
}
