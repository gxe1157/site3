<?php
class Frontend_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		
		// Load stuff
		
		// Fetch navigation
		
		// Page meta title
		$this->data['meta_title'] = config_item('site_name');
	}
}