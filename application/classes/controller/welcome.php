<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
	  $template = View::factory('layout');
	  $template->yield = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_services()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_equipment()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_media()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_clients()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('index');
	  
		$this->response->body($template);
	}
	
	public function action_contact()
	{
		$template = View::factory('layout');
	  $template->yield = View::factory('index');
	  
		$this->response->body($template);
	}

} // End Welcome
