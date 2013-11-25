<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('makeFolder')) 
{
	/*
	|image path start on image-original/images/
	*/
	function makeFolder($url='',$permission=0775)
	{
    	$CI =&get_instance();
     	$base_dir=$CI->config->item('upload_dir');

		
		$createPath = $base_dir.'/img-original/images/'.$url.'/';

		if(!empty($createPath)){
			if(!file_exists($createPath)){
				if(mkdir($createPath, $permission, true)){
				    return $url;
				}else{
					return false;
				}
			}else{
				return $url;
			}

		}
	}

}