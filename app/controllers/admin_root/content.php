<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('makefolder');
	}
	
	public function index()
	{

		$this->template->set_template('admin');



		$data['imagePath']="Images:/".makeFolder('thumbnail/'.date('z').'/'.date('m')).'/';

		$this->template->write_view('content','layout/admin_root/content_form',$data,false);

		$this->template->add_js(
			"
			function BrowseServer( startupPath, functionData )
			{
				// You can use the 'CKFinder' class to render CKFinder in a page:
				//var startupPath='Images:/'+upPath;
				var finder = new CKFinder();

				// The path for the installation of CKFinder (default = '/ckfinder/'').
				finder.basePath = config.vendor_url+'ckfinder/';

				//Startup path in a form: 'Type:/path/to/directory/'
				finder.startupPath = startupPath;

				// Name of a function which is called when a file is selected in CKFinder.
				finder.selectActionFunction = SetFileField;

				// Additional data to be passed to the selectActionFunction in a second argument.
				// We'll use this feature to pass the Id of a field that will be updated.
				finder.selectActionData = functionData;

				// Name of a function which is called when a thumbnail is selected in CKFinder.
				//finder.selectThumbnailActionFunction = ShowThumbnails;

				// Launch CKFinder
				finder.popup();
			}

			// This is a sample function which is called when a file is selected in CKFinder.
			function SetFileField( fileUrl, data )
			{
				document.getElementById( data['selectActionData'] ).value = fileUrl;
			}",'js_view','embed'
			);

		$this->template->render();

	}

	public function save()
	{
		//$this->template->set_template('admin');
		echo"add";
		//$this->template->render();
	}

}