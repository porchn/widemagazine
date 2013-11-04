<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('makefolder');
		$this->load->model('content_model','m_content');
		$this->load->model('categorie_model','m_cate');
		$this->load->model('subcate_model','m_subcate');
	}
	
	public function index()
	{

		$this->template->set_template('admin');



		$data['imagePath']="Images:/".makeFolder('thumbnail/'.date('z').'/'.date('m')).'/';
		$content_path="Images:/".makeFolder('content/'.date('z').'/'.date('m')).'/';

		$mcate_list=$this->m_cate->getCate();
		$mcate="";
		foreach ($mcate_list as $value){
			$mcate.="<option value='".$value['mmenu_id']."'>".$value['mmenu_name']."</option>";
		}
		$data['mcate']=$mcate;

		$subcate_list=$this->m_subcate->getSubcate();
		$scate="";
		foreach ($subcate_list as $svalue) {
			$scate.="<option value='".$svalue['smenu_id']."'>".$svalue['smenu_name']."</option>";
		}
		$data['scate']=$scate;

		

		$this->template->write_view('content','layout/admin_root/content_form',$data,false);
		$this->template->add_js(site_assets_url('js/content_js.js'),'js_view');
		$this->template->add_js("

			CKEDITOR.replace( 'content_detail',
				{
					skin	: 'moono',
					height	: 250,
					filebrowserBrowseUrl : '/assets/vendor/ckfinder/ckfinder.html',
					filebrowserImageBrowseUrl : '/assets/vendor/ckfinder/ckfinder.html?Type=Images&start=$content_path',
					filebrowserFlashBrowseUrl : '/assets/vendor/ckfinder/ckfinder.html?Type=Flash',
					filebrowserUploadUrl : '/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
					filebrowserImageUploadUrl : '/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
					filebrowserFlashUploadUrl : '/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

				}
			);

		",'js_view','embed');

		$this->template->render();

	}

	public function save()
	{
		//$this->template->set_template('admin');
		echo"add";
		//$this->template->render();
	}

}