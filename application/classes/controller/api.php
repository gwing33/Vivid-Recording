<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller {

	public function action_index()
	{
	  $template = View::factory('api/index');
	  
		$this->response->body($template);
	}
	
	public function action_services()
	{
	  $template = View::factory('api/services');
	  
		$this->response->body($template);
	}
	
	public function action_equipment()
	{
	  $template = View::factory('api/equipment');
	  
		$this->response->body($template);
	}
	
	public function action_media()
	{
	  $template = View::factory('api/media');
	  
		$this->response->body($template);
	}
	
	public function action_clients()
	{
	  $template = View::factory('api/clients');
	  
		$this->response->body($template);
	}
	
	public function action_contact()
	{
	  $template = View::factory('api/contact');
	  
		$this->response->body($template);
	}

} // End API
