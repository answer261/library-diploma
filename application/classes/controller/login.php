<?php defined('SYSPATH') or die('No direct script access.');

// Admin Login Controller

class Controller_Login extends Controller_Logincommon {

	public function action_index() {
		if (!Auth::instance()->logged_in()) {
			$content = View::factory('login/loginform');
			$this->template->content = $content;
		} else if (Auth::instance()->logged_in("admin")) {
			$this->request->redirect("admin");
		} else {
			$this->request->redirect("user");
		}
	}

	public function action_login() {
		$postVars = $this->request->post();
		$success = Auth::instance()->login($postVars['username'], $postVars['password']);

		if (!Auth::instance()->logged_in()) {
			$content = View::factory('login/loginform');
			$this->template->content = $content;
		} else if (Auth::instance()->logged_in("admin")) {
			$this->request->redirect("admin");
		} else {
			$this->request->redirect("user");
		}
	}
	
	public function action_logout() {
		Auth::instance()->logout();
		$this->request->redirect("login");
	}
	
} // Admin Login Controller