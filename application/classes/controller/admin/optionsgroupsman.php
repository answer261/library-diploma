<?php defined('SYSPATH') or die('No direct script access.');

// Options Groups Manager Controller

class Controller_Admin_Optionsgroupsman extends Controller_Admin_Commonentity {
	
	protected $modelName = "Optionsgroups";
	protected $indexViewFile = "admin/optg/index";
	protected $addFormViewFile = "admin/optg/addform";
	protected $editFormViewFile = "admin/optg/editform";
	protected $data = array();
	protected $redirectURL = "admin/optg";
		
	protected function prepareMainData() {
		$this->data[] = trim(strval($this->request->post('optg_name')));
	}
			
	public function action_update() {
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect("admin/login");
		}
		else {
			$this->data[] = intval($this->request->post('optg_id'));
			$this->prepareMainData();
			$model = Model::factory($this->modelName)->updateRecord($this->data);
			if ($model) $this->request->redirect($this->redirectURL);
		}
	}
}

// Options Groups Manager Controller