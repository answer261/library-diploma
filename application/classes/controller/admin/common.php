<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Common extends Controller_Template {
	
	public $template = 'admin/main';
		
	public function before() {
		parent::before();

		if (!Auth::instance()->logged_in("admin")) {
			$this->request->redirect("login");
		}
		else {
			$content = View::factory('admin/frontpage/index');
			$this->template->content = $content;
		}


		View::set_global('title', 'Admin Section');
		$user_first = Auth::instance()->get_user()->firstname;
		$user_last = Auth::instance()->get_user()->lastname;
		View::set_global('user_first', $user_first);
		View::set_global('user_last', $user_last);
		View::set_global('description', 'Kohana 3.2 framework based site');
		$this->template->content = "";
		$this->template->styles = array('framework','main');
		$this->template->scripts = "";
	}
	
} // End of Common