<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Labs extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('my_imagesizer'); // load library 
		$this->load->helper('imageresize');
		$this->load->helper('form');
		$this->load->helper('makefolder');
	}
	

	// farms/labs/gallery_show/  path to old image 
	public function index()
	{
		$this->load->model('content_model','m_content');
		$content_data=$this->m_content->getAllContent();

		foreach ($content_data as $key => $value) {

			$checkImage=explode('/',$value['cont_pic']);
			if(empty($checkImage[1]) || $checkImage[1]!='farms'){

				$cont_date=explode('-', $value['cont_date']);
				$dir_year=$cont_date[0];
				$dir_mont=$cont_date[1];
				$dir_date=$cont_date[2];

				$image_url=site_url('/farms/labs/gallery_show/'.$value['cont_pic']);
				$image_path='/thumbnail/'.$dir_year.'/'.$dir_mont.'/'.ceil($dir_date/7).'/';
				$image_db='/farms/img-original/images'.$image_path.$value['cont_pic'];
				$base_dir=$this->config->item('upload_dir');

				$copy_path=$base_dir.'/img-original/images'.makeFolder($image_path,0777).$value['cont_pic'];
				if(!copy($image_url, $copy_path)){
					echo"Error copy Image!!!";
				}

				$data=array(
					'cont_pic'=>$image_db
				);

				$search=array(
					'cont_id'=>$value['cont_id'],
				);

				if($this->m_content->setContent('update',$search,$data)){
					echo $value['cont_id']."OK <br/>";
				}
			}else{
				//$image_url=site_url('/farms/labs/gallery_show/'.$value['cont_pic']);
				//var_dump($image_url);
				echo $value['cont_pic'].'<br/>';
			}

		}
	}

	public function uploadForm()
	{
		$this->load->view('labs/uploadform_v');
	}

	public function doUpload()
	{
		$config['upload_path'] = site_farms_url('/labs/');
		$config['allowed_types'] = 'gif|jpg|png';
		/*
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		*/

		$this->load->library('upload', $config);
		//$this->upload->initialize($config);

		if (!$this->upload->do_upload('product_image'))
		{
		echo $error = array('error' => $this->upload->display_errors());

			//$this->load->view('upload_form', $error);
		}
		else
		{
			echo $data = array('upload_data' => $this->upload->data());

			//$this->load->view('upload_success', $data);
		}
	}

	public function testad()
	{
		echo"
<!--/* OpenX Javascript Tag v2.8.1 */-->

<!--/*
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://openx.local/www/delivery/...'
  * to
  *   'https://openx.local/www/delivery/...'
  *
  * This noscript section of this tag only shows image banners. There
  * is no width or height in these banners, so if you want these tags to
  * allocate space for the ad before it shows, you will need to add this
  * information to the <img> tag.
  *
  * If you do not want to deal with the intricities of the noscript
  * section, delete the tag (from <noscript>... to </noscript>). On
  * average, the noscript tag is called from less than 1% of internet
  * users.
  */-->

<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://openx.local/www/delivery/ajs.php':'http://openx.local/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write (\"<scr\"+\"ipt type='text/javascript' src='\"+m3_u);
   document.write (\"?zoneid=3\");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write (\"&amp;exclude=\" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write (\"&amp;loc=\" + escape(window.location));
   if (document.referrer) document.write (\"&amp;referer=\" + escape(document.referrer));
   if (document.context) document.write (\"&context=\" + escape(document.context));
   if (document.mmm_fo) document.write (\"&amp;mmm_fo=1\");
   document.write (\"'><\/scr\"+\"ipt>\");
//]]>--></script><noscript><a href='http://openx.local/www/delivery/ck.php?n=a5f2ec6d&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://openx.local/www/delivery/avw.php?zoneid=3&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a5f2ec6d' border='0' alt='' /></a></noscript>

   ";
	}

}