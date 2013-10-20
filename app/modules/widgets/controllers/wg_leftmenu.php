<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wg_leftmenu extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->model('product_model','mProduct');
		$lang=$this->session->userdata("lang")==null?"english":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);

		$query=$this->mProduct->getProduct()->result_array();

		$return_html="<span>".$this->lang->line('product')."</span><ul>";
		foreach ($query as $value){
			$prodName=unserialize($value['prod_name']);
			$productlink=base_url('product/detail/'.$value['prod_id']);
			$return_html.="<li><a href='".$productlink."'>".$prodName[$lang]."</a></li>";
		}
		$return_html.="</ul>";
		return $return_html;
	}
}