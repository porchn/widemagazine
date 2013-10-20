<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wg_contentlist extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index($data)
	{
		$lang=$this->session->userdata("lang")==null?"english":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$vdata=array();
		$html_list="";

		$html_list.="<div class='plist w738'><ul class='cont_list'>";
		foreach ($data as $value) {
			$vdata['cont_id']=$value['cont_id'];
			switch ($value['cont_type']) {
				case '1':
					$vdata['cont_type']='activities';
					break;
				case '2':
					$vdata['cont_type']='beauty';
					break;
				case '3':
					$vdata['cont_type']='promotion';
					break;
				default:
					$vdata['cont_type']='beauty';
					break;
			}
			$pname=unserialize($value['cont_name']);
			$ptitle=unserialize($value['cont_title']);
			$pdetail=unserialize($value['cont_desc']);

			$vdata['cont_name']=$pname[$lang];
			$vdata['cont_title']=$ptitle[$lang];
			$vdata['cont_detail']=$pdetail[$lang];
			$vdata['cont_img']=$value['cont_img'];

			$html_list.=$this->load->view('list_cont',$vdata,true);
		}
		$html_list.="</ul></div>";

		return $html_list;
	}
}