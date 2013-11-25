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
	
	public function scateList()
	{
		$mcate=$this->input->post('mcate');
		$search=array('smenu_mmenu'=>$mcate);
		$subcate_list=$this->m_subcate->getSubcate($search);

		$scate="";
		foreach ($subcate_list as $svalue) {
			echo "<option value='".$svalue['smenu_id']."'>".$svalue['smenu_name']."</option>";
		}


	}
	public function index()
	{

		$this->template->set_template('admin');



		$data['imagePath']="Images:/".makeFolder('thumbnail/'.date('Y').'/'.date('m').'/'.date('N')).'/';
		$content_path="Images:/".makeFolder('content/'.date('Y').'/'.date('m').'/'.date('N')).'/';

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

			$('#mcate').change(function(){
				var mcate= $('#mcate').val();
				$.ajax({
					type: 'POST',
					url: 'content/scateList',
					data: 'mcate='+mcate,
					success: function(msg){
						$('#scate').html(msg);
					}
				});
	 		}).change();


		",'js_view','embed');

		$this->template->render();

	}

	public function save()
	{
		//$this->template->set_template('admin');
		$data=array(
			'cont_name'=> $this->input->post('content_name'),
			'cont_mm'=>$this->input->post('mcate'),
			'cont_sm'=>$this->input->post('scate'),
			'cont_title'=>$this->input->post('content_title'),
			'cont_detail'=>$this->input->post('content_detail'),
			'cont_authors'=>$this->input->post('cont_authors'),
			'cont_link'=>$this->input->post('google_plus'),
			'cont_views'=>0,
			'cont_date'=>date('Y-m-d'),
			'cont_pic'=>$this->input->post('content_image_txt'),
			'cont_tag'=>$this->input->post('tags_name')
		);

		if(empty($data['cont_name']) || empty($data['cont_title']) || empty($data['cont_detail']))
		{
			echo "some data not empty";
			die();
		}

		$action=$this->input->post('action');
		$cont_id=$this->input->post('cont_id');

		if(!empty($cont_id)){
			$action='insert';
		}

		if($this->m_content->setContent('insert',null,$data))
		{
			echo"บันทึกสำเร็จ";
		}else{
			echo"Error!!";
		}

	}

}