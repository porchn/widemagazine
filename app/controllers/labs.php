<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Labs extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('my_imagesizer'); // load library 
		$this->load->helper('imageresize');
		$this->load->helper('form');
		$this->load->helper('makefolder');
	}
	

	// farms/labs/gallery_show/  path to old image 
	public function index()
	{
		$this->load->model('content_model','m_content');
		$content_data=$this->m_content->getAllContent();

		foreach ($content_data as $key => $value) {

			$checkImage=explode('/',$value['cont_pic']);
			if(empty($checkImage[1]) || $checkImage[1]!='farms'){

				$cont_date=explode('-', $value['cont_date']);
				$dir_year=$cont_date[0];
				$dir_mont=$cont_date[1];
				$dir_date=$cont_date[2];

				$image_url=site_url('/farms/labs/gallery_show/'.$value['cont_pic']);
				$image_path='/thumbnail/'.$dir_year.'/'.$dir_mont.'/'.ceil($dir_date/7).'/';
				$image_db='/farms/img-original/images'.$image_path.$value['cont_pic'];
				$base_dir=$this->config->item('upload_dir');

				$copy_path=$base_dir.'/img-original/images'.makeFolder($image_path,0777).$value['cont_pic'];
				if(!copy($image_url, $copy_path)){
					echo"Error copy Image!!!";
				}

				$data=array(
					'cont_pic'=>$image_db
				);

				$search=array(
					'cont_id'=>$value['cont_id'],
				);

				if($this->m_content->setContent('update',$search,$data)){
					echo $value['cont_id']."OK <br/>";
				}
			}else{
				//$image_url=site_url('/farms/labs/gallery_show/'.$value['cont_pic']);
				//var_dump($image_url);
				echo $value['cont_pic'].'<br/>';
			}

		}
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