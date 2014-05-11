<?php defined('SYSPATH') or die('No direct script access.');

// Options Groups Manager Controller

class Controller_Admin_Publishers extends Controller_Admin_Commonentity {
	
	protected $modelName = "publishers";
	protected $indexViewFile = "admin/publishers/index";
	protected $addFormViewFile = "admin/publishers/addform";
	protected $editFormViewFile = "admin/publishers/editform";
	protected $data = array();
	protected $redirectURL = "admin/publishers";
		
	protected function prepareMainData() {
		$this->data[] = trim(strval($this->request->post('publisher_name')));

	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in("admin")) {
			$this->request->redirect("#");
		}
		else {
			$this->data[] = intval($this->request->post('publisher_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}
}

// Options Groups Manager Controller