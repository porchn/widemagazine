<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wg_productlist extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index($data)
	{
		$lang=$this->session->userdata("lang")==null?"english":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$count=0;
		$vdata=array();
		$html_list="";

		foreach ($data as $value) {
			$count++;
			$vdata['prod_id']=$value['prod_id'];
			$pname=unserialize($value['prod_name']);
			$ptitle=unserialize($value['prod_title']);
			$pdetail=unserialize($value['prod_detail']);

			$vdata['prod_name']=$pname[$lang];
			$vdata['prod_title']=$ptitle[$lang];
			$vdata['prod_detail']=$pdetail[$lang];
			$vdata['prod_image']=$value['prod_img'];
			$vdata['prod_thumb']=$value['prod_thumb'];


			if($count%2==0){				
				$html_list.=$this->load->view('list_right',$vdata,true);
			}else{
				$html_list.=$this->load->view('list_left',$vdata,true);
			}
			# code...
		}
		return $html_list;
	}
}