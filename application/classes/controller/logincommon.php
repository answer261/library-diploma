<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Logincommon extends Controller_Template {
	
	public $template = 'login';
	
	public function before() {
		parent::before();
		View::set_global('title', 'AUTO SALOON ADMIN');
		View::set_global('description', 'Kohana 3.2 framework based site');
		$this->template->content = "";
		$this->template->styles = array('framework','main','log_form');
		$this->template->scripts = "";
	}
	
} // End of Admin Common