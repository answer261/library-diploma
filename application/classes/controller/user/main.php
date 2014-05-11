<?php defined('SYSPATH') or die('No direct script access.');

// News Controller

class Controller_User_Main extends Controller_User_Common {

	public function action_index() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("login");
		}
		else {
			$content = View::factory('user/frontpage/index');
			$this->template->content = $content;
		}

	}

} // Admin main Controller