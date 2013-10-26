<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('imageResize')) 
{
	function imageResize($url='',$width=100,$height=100,$alt='image',$imgClass=null)
	{
    	$CI =&get_instance();
     	$CI->load->library('wideimage/wideImage'); // load library 
     	$base_dir=$CI->config->item('upload_dir');


		$imageUrl = base_url($url);

		$imageName = basename($imageUrl);
		$imagepart ='/img-resize/'.$width.'_'.$height.'/';
		$resizePart = $base_dir.$imagepart;
		$resizeUrl= $CI->config->item('upload_url').$imagepart.$imageName;
		$resizeImage=$resizePart.$imageName;

		if(@getimagesize($resizeImage)){
			return "<img src='$resizeUrl' alt='$alt' class='$imgClass'/>";
		}else{

			if(!file_exists($resizePart)){
				if (!mkdir($resizePart, 0777, true)){
				    die('Failed to create folders...');
				}else{
					$CI->wideimage->load($imageUrl)->resize($width, $height,'outside')->crop(0,0,$width,$height)->saveToFile($resizeImage);
					return "<img src='$resizeUrl' alt='$alt' class='$imgClass'/>";
				}
			}else{
				$CI->wideimage->load($imageUrl)->resize($width, $height,'outside')->crop(0,0,$width,$height)->saveToFile($resizeImage);
				return "<img src='$resizeUrl' alt='$alt' class='$imgClass'/>";
			}
		}
	}
}
