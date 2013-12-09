<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('content_model','mContent');
	}
	
	public function index()
	{
		$this->template->set_template('main');
		$data['page']='home';
		$data['main_menu']=modules::run('widgets/wg_menu/index',null);

		$this->mContent->getContent();

		$cdata['content_new']=modules::run('widgets/wg_contnew/allNew',null,null);
		$cdata['makeup_new']=modules::run('widgets/wg_contnew/makeupNew',null,1);
		$cdata['hair_new']=modules::run('widgets/wg_contnew/hairNew',null,5);
		$cdata['fashion_new']=modules::run('widgets/wg_contnew/fashionNew',null,4);

		$this->template->write_view('header','template/main/header',$data,true);
		$this->template->write_view('content','template/main/content',$cdata,true);

		$this->template->render();
	}

}