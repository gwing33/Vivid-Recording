<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
	  $template = View::factory('layout');
	  $template->yield = View::factory('api/index');
	  
		$this->response->body($template);
	}
	
	public function action_services()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('api/services');
	  
		$this->response->body($template);
	}
	
	public function action_equipment()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('api/equipment');
	  
		$this->response->body($template);
	}
	
	public function action_media()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('api/media');
	  
		$this->response->body($template);
	}
	
	public function action_clients()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('api/clients');
	  
		$this->response->body($template);
	}
	
	public function action_contact()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('api/contact');
	  
		$this->response->body($template);
	}

} // End Welcome
