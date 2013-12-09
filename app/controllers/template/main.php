<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller
{
	public function __consruct()
	{
		parent::__construct();
	}

	public function footer()
	{

		$data=array();
		$this->template->write_view('footer','template/main/footer',$data, true);
	}
}