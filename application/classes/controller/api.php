<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller {

	public function action_index()
	{
	  $template = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_services()
	{
	  $template = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_equipment()
	{
	  $template = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_media()
	{
	  $template = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_clients()
	{
	  $template = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_contact()
	{
	  $template = View::factory('index');
	  
		$this->response->body($template);
	}

} // End API
