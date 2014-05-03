<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Common {
	
	public function action_index() {
		$content = View::factory('/pages/show');
		$this->template->content = $content;
	}
	
	public function action_about() {
		$content = View::factory('/pages/about');
		$this->template->content = $content;
	}

	public function action_info() {
		$content = View::factory('/pages/info');
		$this->template->content = $content;
	}

	public function action_contact() {
		$content = View::factory('/pages/contact');
		$this->template->content = $content;
	}
	
	public function action_oreders(){
		$content = View::factory('/pages/oreders');
		$this->template->content=$content;
	}

} // Page