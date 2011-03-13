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
		$this->response->body('Hello Services!');
	}
	
	public function action_equipment()
	{
		$this->response->body('Hello Equipment!');
	}
	
	public function action_media()
	{
		$this->response->body('Hello Media!');
	}
	
	public function action_clients()
	{
		$this->response->body('Hello Clients!');
	}
	
	public function action_contact()
	{
		$this->response->body('Hello Contact!');
	}

} // End Welcome
