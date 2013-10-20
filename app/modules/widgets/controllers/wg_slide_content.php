<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wg_slide_content extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index($cont_type)
	{
		$this->load->model('content_model','mcontent');
		$this->load->helper('imageresize');
		$query=$this->mcontent->getcontent(null,$cont_type);

		$lang=$this->session->userdata("lang")==null?"english":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$rs=$query->result_array();

		$contarray=$cont_type-1;

		switch ($cont_type) {
			case '1':
				$header_slide="activities";
				break;
			case '2':
				$header_slide="beauty";
				break;
			case '3':
				$header_slide="promotion";
				break;
			default:
				# code...
				break;
		}
		$returnHtml='<li>
				<div style="padding: 20px 0 5px 20px"><span class="font-b">News </span>'.$this->lang->line($header_slide).'</div>
				<div class="slideshow'.$contarray.' shadow">';

		foreach ($rs as $key => $value) {
			//$returnHtml.=$value[$key]['cont_name'];
			$imagealt=unserialize($value['cont_name']);
			$returnHtml.='<a href="'.base_url($header_slide.'/detail/'.$value['cont_id']).'" title="">';
			$returnHtml.=imageResize($value['cont_img'],313,212,$imagealt[$lang]);
			$returnHtml.='</a>';
		}
		$returnHtml.='</div>
				<div id="nav'.$contarray.'"></div>
			</li>';
		return $returnHtml;
	}
}