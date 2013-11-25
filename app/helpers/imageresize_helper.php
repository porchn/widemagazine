<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('imageResize')) 
{
	function imageResize($url='',$width=100,$height=100,$alt='widemagazine-image',$imgClass=null)
	{
    	$CI =&get_instance();
     	$CI->load->library('wideimage/wideImage'); // load library 
     	$base_dir=substr($CI->config->item('base_dir'), 0, -1);

     	//substr($string, 0, -1);
     	//$path_parts = pathinfo($url);
     	//var_dump($path_parts['dirname']);
     	//die();

     	//var_dump(dirname($url));
     	//die();


     	//http://widemagazine.local/farms/img-original/images/thumbnail/400/1/widemagazine_2160.jpg
		$imageUrl = base_url($url);

		//$imageName = basename($imageUrl);

		$imageName=$width."_".$height."_".basename($imageUrl);
		//var_dump($imageName);
		//die();

		//var_dump($imageName);
		//die();

		$imagepart =dirname($url).'/';
		$resizePart = $base_dir.$imagepart;
		$resizeUrl= $CI->config->item('base_url').$imagepart.$imageName;
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
