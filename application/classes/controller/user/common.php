<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_User_Common extends Controller_Template {
	
	public $template = 'user/main';
		
	public function before() {
		parent::before();
		View::set_global('title', 'Admin Section');
		View::set_global('description', 'Kohana 3.2 framework based site');
		$this->template->content = "";
		$this->template->styles = array('framework','main');
		$this->template->scripts = "";
	}
	
} // End of Common