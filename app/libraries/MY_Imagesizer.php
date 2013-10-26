<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

require APPPATH."libraries/wideimage/WideImage".EXT;

class MY_Imagesizer extends WideImage {

    function imageResize()
    {
    	var_dump("library");
    	die();
    }
}

