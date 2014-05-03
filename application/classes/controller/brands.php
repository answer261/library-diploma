<?php defined('SYSPATH') or die('No direct script access.');

// Brands Controller

class Controller_Brands extends Controller_Admin_Common {
	
	protected $modelName = "Brands";
	protected $indexViewFile = "/brands/index";
	
	public function action_index() {
		parent::action_index();
	}
	
} // Brands Controller