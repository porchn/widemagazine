<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wg_resize extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
	}

	function imageResize($url='',$width=100,$height=100)
	{
    	$CI =&get_instance();
     	$CI->load->library('wideImage'); // load library 

   		$imageUrl = base_url($url);
		$imageName = basename($imageUrl);
		$resizePart = 'farms/product/'.$width.'_'.$height.'/';
		$resizeUrl= base_url($resizePart);
		$resizeImage=$resizeUrl.$imageName;

		if(@getimagesize($resizeImage)){

			return "aaa<img src='$resizeImage' width='$width' height='$height' alt=''/>";

		}else{

			if(!file_exists($resizePart)){
				if (!mkdir($resizePart, 0777, true)) {
				    die('Failed to create folders...');
				}else{
					return "แต่งอัพภาพเลย ไม่ต้องสร้าง dir";
					//$this->wideimage->load($imageUrl)->resize($width,$height)->saveToFile($resizeImage);
					return "<img src='$resizeImage' width='$width' height='$height' alt=''/>";
				}

			}else{
				$image = $CI->wideimage->load($imageUrl);
				$image1=$image->output('jpg', 90);
				var_dump($image1);
				//var_dump($image);
				//return "<img src='".$imageUrl."' alt=''/>";

				//$CI->wideimage->load('http://cheriz.local/farms/banner/TERMFUN2.png')->resize(500,500)->output('jpg', 99);
				//$this->wideimage->load('http://cheriz.local/farms/banner/TERMFUN2.png')->resize(500,500)->output('gif', 99);
				//return "bbbb<img src='$resizeImage' width='$width' height='$height' alt=''/>";
			}
		}
	}
}