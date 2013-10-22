<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->template->set_template('main');

		$data['page']='home';
		$data['main_menu']=modules::run('widgets/wg_menu/index',null);
		$this->template->write_view('header','template/main/header',$data,true);
		$this->template->write_view('content','template/main/content',null,true);

		$this->template->write_view('footer','template/main/footer',null,true);

		$this->template->render();
	}

}