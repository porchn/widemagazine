<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( !function_exists('debug') ) 
{
	function debug($str) {
	    print "<pre>";
		print_r($str);
		print "</pre>";
	}
}

if(!function_exists('subtext'))
{
	function subtext($input, $range, $encoding="UTF-8", $dotted = true){
		if($dotted and (mb_strlen($input) > $range))
			return mb_substr($input, 0, $range, $encoding) . "...";
		else
			return mb_substr($input, 0, $range, $encoding);
	}
}

if ( !function_exists('printTags') ) 
{
	function printTags($tags=null,$count=null){
		if(!is_null($tags)|| $tags!=''){
			if(!is_null($tags)){
				$atags=explode(",", $tags);
			}
			//$acount=is_null($count)?count($atags):$count;

			if(is_null($count)){
				$acount=count($atags)-1;
			}else{
				if($count<count($atags)){
					$acount=$count-1;
				}else{
					$acount=count($atags)-1;
				}
			}
			$returntag="";
			for ($i=0; $i<=$acount; $i++) {
				$returntag.='<a href="#">'.$atags[$i].'</a>';
				if($i<$acount){
					$returntag.=",";
				}
			}
			return $returntag;
		}
	}
}

if(!function_exists('DateThai'))
{
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear ";
	}
}