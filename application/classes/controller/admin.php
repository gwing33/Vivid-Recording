<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {

	public function action_index()
	{
		$this->response->body('Blah, world!');
	}
	
	public function action_login()
	{ 
	  $template = View::factory('admin/layout');
	  $template->yield = View::factory('admin/login');
	  $template->yield->values = $_POST;
	  
	  $this->response->body($template);
	}

} // End Welcome
