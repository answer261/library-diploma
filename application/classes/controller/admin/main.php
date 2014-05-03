<?php defined('SYSPATH') or die('No direct script access.');

// News Controller

class Controller_Admin_Main extends Controller_Admin_Common {

	public function action_index() {
		if (!Auth::instance()->logged_in("admin")) {
			$this->request->redirect("login");
		}
		else {
			$content = View::factory('admin/frontpage/index');
			$this->template->content = $content;
		}

	}

} // Admin main Controller