<?php defined('SYSPATH') or die('No direct script access.');

// Options Groups Manager Controller

class Controller_Admin_Categories extends Controller_Admin_Commonentity {
	
	protected $modelName = "categories";
	protected $indexViewFile = "admin/categories/index";
	protected $addFormViewFile = "admin/categories/addform";
	protected $editFormViewFile = "admin/categories/editform";
	protected $data = array();
	protected $redirectURL = "admin/categories";
		
	protected function prepareMainData() {
		$this->data[] = trim(strval($this->request->post('category_name')));

	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in("admin")) {
			$this->request->redirect("#");
		}
		else {
			$this->data[] = intval($this->request->post('category_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}
}

// Options Groups Manager Controller